<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function tour()
    {
        return view('tour');
    }
    public function about()
    {
        return view('about');
    }
}
