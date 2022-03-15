<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Contact index page
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Contact form submitted
     */
    public function submission(ContactRequest $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactEmail($request->except('_token')));

        return redirect()
            ->route('view.contact')
            ->with('success', 'Thank you for your interest in working with us. We will get in touch with you soon!');
    }
}
