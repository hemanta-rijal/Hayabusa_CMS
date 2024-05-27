<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $submissions = Contact::latest()->get();
        return view('backend.contact.index', compact('submissions'));
    }

    public function destroy(Contact $submission)
    {
        $submission->delete();

        return redirect()->route('contact.index')->with('success', 'Contact form submission deleted successfully.');
    }
}
