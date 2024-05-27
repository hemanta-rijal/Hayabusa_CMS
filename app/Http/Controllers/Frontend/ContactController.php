<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail ;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        // dd($request->all());
        $contact = Contact::create($request->sanitizedData());
        // Send email
        Mail::to($request->email)->send(new ContactMail($contact));
        // Optionally, you can redirect the user after successful submission
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
