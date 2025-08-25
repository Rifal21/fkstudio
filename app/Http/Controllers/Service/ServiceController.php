<?php

namespace App\Http\Controllers\Service;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // $servicehero = Cockpit::first('servicehero');
        // $service = Cockpit::get('services');
        return view('services.index');
    }
}
