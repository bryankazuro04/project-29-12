<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view('register.index');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:8|max:12'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('status', 'Registrasi berhasil!');
    }
}