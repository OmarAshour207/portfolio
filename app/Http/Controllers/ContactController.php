<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required|string',
            'phone'     => 'sometimes|nullable|numeric',
            'email'     => 'required|email',
            'message'   => 'required|string|min:10'
        ]);

        Contact::create($data);
        session()->flash('success', trans('home.sent_successfully'));
        return redirect()->back();
    }
}