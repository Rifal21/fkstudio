<?php

namespace App\Http\Controllers\Service;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Cockpit::first('servicepage');
        $item = Cockpit::get('servicesitem');
        return view('services.index', compact('service', 'item'));
    }

    public function show($slug)
    {
        $service = Cockpit::first('servicepage');
        $serviceitem = Cockpit::get('servicesitem', ['limit' => 3]);
        $item = Cockpit::get('servicesitem', ['filter' => ['slug' => $slug]]);
        if (!$item) {
            abort(404);
        }
        $item = $item[0];

        // dd($item);
        return view('services.show', compact('service', 'item', 'serviceitem'));
    }
}
