<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display the search results view.
     */
    public function index()
    {
        return view('search-results');
    }
}
