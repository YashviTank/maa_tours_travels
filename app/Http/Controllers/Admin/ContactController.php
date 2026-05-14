<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = ContactSubmission::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function updateStatus(Request $request, ContactSubmission $contact)
    {
        $request->validate([
            'status' => 'required|in:new,read,replied',
        ]);

        $contact->update(['status' => $request->status]);

        return back()->with('success', 'Message status updated!');
    }

    public function destroy(ContactSubmission $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message deleted!');
    }
}
