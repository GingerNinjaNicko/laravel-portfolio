<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'msg' => 'required|string',
            'robot' => 'required|in:no',
        ]);

        // send message

        // redirect with message
        return back()->with([
            'status' => 'Input valid!'
        ]);
    }
}
