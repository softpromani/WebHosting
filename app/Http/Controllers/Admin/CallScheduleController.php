<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallSchedule;
use Illuminate\Http\Request;

class CallScheduleController extends Controller
{
    public function index()
    {
        $callschedules = CallSchedule::latest()->paginate(10);
        return view('admin.CallSchedule.callschedule', compact('callschedules'));
    }

    public function create()
    {
        return view('admin.CallSchedule.callscheduleCreate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        CallSchedule::create($data);
        return redirect()->route('admin.callschedule.index')->with('success', 'Call schedule submitted successfully.');

    }

    public function edit($id)
    {
        $editcallschedule = CallSchedule::findOrFail($id);
        return view('admin.CallSchedule.callscheduleCreate', compact('editcallschedule'));

    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
           'message'=> 'nullable|string',
        ]);

        $callSchedule = CallSchedule::findOrFail($id);
        $callSchedule->update($data);
        return redirect()->route('admin.callschedule.index')->with('success', 'Call schedule updated successfully.');

    }

    public function destroy($id)
    {

        $callschedule = CallSchedule::findOrFail($id);
        $callschedule->delete();

        return response()->json(['success' => true]);
    }

}

