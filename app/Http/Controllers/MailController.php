<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Mail;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    

    public function sendMail()
    {
        Mail::to('ishikashikal603@gmail.com')->send(new TestMail());

        return "Email sent successfully";
    }
}
