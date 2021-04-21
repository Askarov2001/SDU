<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendemail()
    {
        $details = [
            'title' => 'Mail from A-company',
            'body' => 'This is for testing mail using gmail.'
        ];

        Mail::to("adlet.ask.09@gmail.com")->send(new TestMail($details));
        return "Email Sent!";
    }
}
