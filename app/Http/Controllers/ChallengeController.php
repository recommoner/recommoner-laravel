<?php

namespace App\Http\Controllers;
use App\article;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index(){
        $articles = article::all();
        return view('challenge',compact('articles'));
    }
}
