<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    public function store(ContactUsRequest $request)
    {
        $enquiry = $request->validated();

        // send message
        Mail::to('info@nickoJRuddock.com')->send(new ContactForm($enquiry));

        // redirect with message
        return redirect('/#contact')->with([
            'message' => 'Email sent successfully',
            'status' => 'success',
        ]);
    }
}
