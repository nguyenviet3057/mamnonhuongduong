<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request)
    {
        return view('user/home');
    }

    public function schedule(Request $request)
    {
        return view('user/schedule');
    }

    public function news(Request $request)
    {
        return view('user/news');
    }
}
