<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function show()
    {
        return view('resource-detail');
    }
}
