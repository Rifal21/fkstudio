<?php

namespace App\Http\Controllers\Language;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function store($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
