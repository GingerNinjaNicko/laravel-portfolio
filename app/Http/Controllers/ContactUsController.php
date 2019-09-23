<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $enquiry = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'msg' => 'required|string',
            'robot' => 'required|in:no',
        ]);

        // send message
        Mail::to('info@nickoJRuddock.com')->send(new ContactForm($enquiry));

        // redirect with message
        return back()->with([
            'message' => 'Email sent successfully',
            'status' => 'success',
        ]);
    }
}
