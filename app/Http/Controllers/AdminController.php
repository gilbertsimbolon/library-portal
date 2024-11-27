<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function getUserData()
    {
        $users = User::where('role', 'user')->get();

        return view('data-user', compact('users'));
    }
}
