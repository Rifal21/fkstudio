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
        $servicehome = Cockpit::first('serviceshome');
        $serviceitem = Cockpit::get('servicesitem');
        return view('home.index', compact('hero', 'brand', 'servicehome', 'serviceitem'));
    }
}
