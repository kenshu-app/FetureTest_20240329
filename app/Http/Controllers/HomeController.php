<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = \Auth::user()->books()->orderBy('created_at', 'desc')->paginate(20);
        return view('home.index', ['books' => $books]);
    }
}
