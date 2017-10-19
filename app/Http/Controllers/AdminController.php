<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    protected function updateUser(Request $request)
    {
        $_user = User::where(['email' => 'info@iridiumsoft.org'])->get();
        $_user[0]->admin = 1;
        if ($_user[0]->save()) {
            echo 'changed';
        } else {
            echo 'nope';
        }
    }
}