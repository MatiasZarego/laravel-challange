<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectsController extends Controller
{
    public function index()
    {
        return view('prospects.index');
    }
    public function store(Request $req)
    {
        $data = request()->validate([
            'name' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:prospects', 'max:255'],
        ]);

        $prospect= new Prospect;
        $prospect->name=$req->name;
        $prospect->lastname=$req->lastname;
        $prospect->email=$req->email;
        $prospect->save();
        return redirect()->back();
    }
}
