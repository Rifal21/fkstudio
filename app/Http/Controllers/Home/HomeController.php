<?php

namespace App\Http\Controllers\Home;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Cockpit::first('hero');
        $brand = Cockpit::first('brand');
        return view('home.index', compact('hero', 'brand'));
    }
}
