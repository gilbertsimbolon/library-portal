<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StrukturImage extends Controller
{
    public function index()
    {
        $strukturImage = Structure::all();

        return view('struktur', compact('strukturImage'));
    }
}
