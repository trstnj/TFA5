<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Display the POS landing page
    public function index()
    {
        return view('home');
    }

    // Display the About page
    public function about()
    {
        return view('about');
    }
}
