<?php

namespace App\Http\Controllers\Agency;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $about = Cockpit::first('aboutpage');
        $brand = Cockpit::first('brand');
        return view('agency.index', compact('about', 'brand'));
    }
}
