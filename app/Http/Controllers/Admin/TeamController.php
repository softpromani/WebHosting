<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Team::select(['id', 'name', 'position', 'pic', 'facebook', 'twitter', 'instagram', 'linkedin', 'status'])->get();

            return DataTables::of($data)
                ->addColumn('pic', function ($data) {
                    $url = asset($data->pic);
                    return '<img src="' . $url . '" style="width:80px;height:80px;" alt="Image">';
                })
                ->addColumn('action', function ($data) {
                    return '
                    <a href="' . route('admin.team.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-team" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
                    <a href="' . route('admin.team.show', $data->id) . '" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                ';
                })
                ->rawColumns(['pic', 'action'])
                ->make(true);
        }
        return view('admin.team.teamList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.teamCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'pic' => 'required',
        ]);
        $twitter = $request->twitter ?? '#';
        $facebook = $request->facebook ?? '#';
        $instagram = $request->instagram ?? '#';
        $linkedin = $request->linkedin ?? '#';

        if ($request->hasFile('pic')) {
            $upic = 'team-' . time() . '-' . rand(0, 99) . '.' . $request->pic->extension();
            $request->pic->move(public_path('upload/team/images/'), $upic);
            $pic_name = 'upload/team/images/' . $upic;
        }

        $data = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'pic' => $pic_name ?? null,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'linkdin' => $linkedin,
        ]);
        if ($data) {
            toast('Team Created Successfully', 'success');
            return redirect()->route('admin.team.index');
        } else {
            toast('Team Not Created', 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showTeam = Team::find($id);
        return view('admin.team.teamCreate', compact('showTeam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editTeam = Team::find($id);
        return view('admin.team.teamCreate', compact('editTeam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);
        $twitter = $request->twitter ?? '#';
        $facebook = $request->facebook ?? '#';
        $instagram = $request->instagram ?? '#';
        $linkedin = $request->linkedin ?? '#';

        if ($request->hasFile('pic')) {
            $upic = 'team-' . time() . '-' . rand(0, 99) . '.' . $request->pic->extension();
            $request->pic->move(public_path('upload/team/images/'), $upic);
            $pic_name = 'upload/team/images/' . $upic;
            $data = Team::find($id)->update(['pic' => $pic_name]);
        }

        $data = Team::find($id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'linkedin' => $linkedin,
        ]);
        if ($data) {
            toast('Team Updated Successfully', 'success');
            return redirect()->route('admin.team.index');
        } else {
            toast('Team Not Updated', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $t = Team::find($id);
        $team = $t->delete();
        if ($team) {
            return response()->json(['success' => 'Team deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Team.'], 500);
        }
    }
}
