<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function about()
    {

        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
