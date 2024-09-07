<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailVerify;

class MailController extends Controller
{
    public function sendmail()
    {
        Mail::to('ibnuzaky94444@gmail.com')->send(new MailVerify([
            'title' => 'The Title',
            'body' => 'The Body',
        ]));
    }
}