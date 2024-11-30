<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visiMisi = VisiMisi::first();

        $visiMisi->misi = explode("\n", $visiMisi->misi);
        
        return view('visi-misi', compact('visiMisi'));
    }
}

