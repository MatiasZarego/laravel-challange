<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    public function index()
    {
        return view('prospects.index');
    }
}
