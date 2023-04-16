<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
