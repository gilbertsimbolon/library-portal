<?php

namespace App\Http\Controllers;

use App\Models\LibraryMembers;
use Illuminate\Http\Request;

class LibraryMemberController extends Controller
{
    public function create()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email_edukasi' => 'required|email',
            'no_hp' => 'required|string|max:15',
            'no_wa' => 'required|string|max:15',
            'fakultas' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
        ]);

        try {
            // Insert data ke database
            LibraryMembers::create($validatedData);

            // Jika sukses, redirect dengan session sukses
            return redirect()->route('kontak')->with('success', true);
        } catch (\Exception $e) {
            // Jika gagal, redirect dengan session error
            return redirect()->route('kontak')->with('error', true);
        }
    }
}
