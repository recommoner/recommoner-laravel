<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function send()
    {
        echo 1;
        $sent = Mail::send('emails.new_article', ['name' => 'Sammar'], function ($message) {
            $message->to('sameer.ali@lokpunjab.org', 'IridiumSoft')->subject('Test Email');
            $message->from('info@iridiumsoft.org', 'IridiumSoft');
            echo '1';
            echo $message;
        });
        echo $sent  . ' END';
    }
}
