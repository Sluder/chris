<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ourWork()
    {
        return view('our-work');
    }

    public function registerToWin()
    {
        return view('register-to-win');
    }
}
