<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketSubmission;

class TicketSubmissionController extends Controller
{
    public function index()
    {
        $tickets = TicketSubmission::latest()->paginate(10);
        return view('admin.TicketSubmission.ticketsubmission', compact('tickets'));
    }

    public function create()
{
    return view('admin.TicketSubmission.ticketsubmissionCreate');
}

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'user_name' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        TicketSubmission::create($data);

        return redirect()->route('admin.ticketsubmission.index')->with('success', 'Ticket submitted successfully.');
    }

    public function edit($id)
{
    $editticketsubmission = TicketSubmission::findOrFail($id);
    return view('admin.TicketSubmission.ticketsubmissionCreate', compact('editticketsubmission'));

}

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'user_name' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $ticket = TicketSubmission::findOrFail($id);
        $ticket->update($data);

        return redirect()->route('admin.ticketsubmission.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy($id)
    {
        $ticket = TicketSubmission::findOrFail($id);
        $ticket->delete();

        return response()->json(['success' => true]);
    }
}
