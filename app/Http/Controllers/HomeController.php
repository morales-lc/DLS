<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function index()
    {
        return view('dashboard');
    }
}

