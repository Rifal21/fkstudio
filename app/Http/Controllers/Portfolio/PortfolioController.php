<?php

namespace App\Http\Controllers\Portfolio;

use App\Helpers\Cockpit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // $folio = Cockpit::first('portofolio');
        // $hero = Cockpit::first('hero');
        return view('portfolio.index');
    }

    // public function show($slug)
    // {
    //     // dd($slug);
    //     $folio = Cockpit::first('portfolio', ['filter' => ['slug' => $slug]]);
    //     // dd($folio);
    //     if (!$folio) {
    //         abort(404);
    //     }
    //     return view('portfolio.show', compact('folio'));
    // }
}
