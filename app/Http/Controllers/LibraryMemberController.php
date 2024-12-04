<?php

namespace App\Http\Controllers;

use App\Models\LibraryMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibraryMemberController extends Controller
{
    public function create()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make(request()->all(), [
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email_edukasi' => 'required|email',
            'no_hp' => 'required|string|max:15',
            'no_wa' => 'required|string|max:15',
            'fakultas' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
        ]);

        if ($validatedData->fails()) {
            return redirect()->route('kontak')
                ->withErrors($validatedData)
                ->withInput();
        }

        $libraryMembers = LibraryMembers::create($request->only([
            'nama',
            'nim',
            'email_edukasi',
            'no_hp',
            'no_wa',
            'fakultas',
            'program_studi'
        ]));

        if ($libraryMembers) {
            return redirect()->route('kontak')->with('success', 'Pendaftaran Anggota Perpustakaan Berhasil!');
        } else {
            return redirect()->route('kontak')->with('error', 'Pendaftaran Anggota Perpustakaan Gagal!');
        }
    }
}
