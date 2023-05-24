<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('vote', 'desc')->get();

        return view('home', compact('movies'));
    }

    public function about()
    {
        $movies = Movie::orderBy('vote', 'desc')->get();
        return view('about', compact('movies'));
    }

    public function contacts()
    {
        $movies = Movie::orderBy('vote', 'desc')->get();
        return view('contacts', compact('movies'));
    }
}
