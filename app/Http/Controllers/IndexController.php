<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('home-personal');
    }
    public function index2()
    {
        return view('home-agency');
    }
    public function index3()
    {
        return view('index');
    }
}
