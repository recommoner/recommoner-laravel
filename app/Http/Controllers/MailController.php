<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function send()
    {
        echo 1;
        Mail::send('emails.new_article', ['name' => 'Sammar Abbas'], function ($message) {
            $message->to('sammarabbas152@gmail.com', 'Sammar')->subject('Test Email');
            $message->from('sammarabbas152@gmail.com', 'Sammar');
            echo $message;
        });
    }
}
