<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * DIsplay card page.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('card');
    }
}
