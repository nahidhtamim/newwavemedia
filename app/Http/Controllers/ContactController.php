<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.contact');
    }

    public function contactMail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'phone' => 'required',
          'email' => 'required|email',
          'captcha' => 'required|captcha',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'company_name' => $request->company_name,
            'content' => $request->content,
        ];

        Mail::to('forfreelancing101@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('message_sent', 'Your Mail Has Been Sent');

    }

    public function refreshCaptcha(){
        return response()->json(['captcha' =>captcha_img()]);
    }
}
