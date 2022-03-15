<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Contact form submitted
     */
    public function submission(Request $request)
    {
        Mail::to('zachary.sluder@gmail.com')->send(new ContactEmail($request->except('_token')));

        return redirect()
            ->route('view.index')
            ->with('success', 'Thank you for your interest in working with us. We will get in touch with you soon!');
    }
}
