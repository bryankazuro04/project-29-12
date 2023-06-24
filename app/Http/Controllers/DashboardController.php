<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        return view('dashboard.home', [
            'title'         => 'Dashboard',
            'pegawai'       => Pegawai::latest()->limit(5)->get(),
            'pegawai_count' => Pegawai::count(),
            'user_count'    => User::count()
        ]);
    }   

    public function setting() {
        return view('dashboard.setting', ['title' => 'User Setting']);
    }

    public function update(Request $request) {
        $request->validate([
            'name'  => 'required',
            'email' => 'required'
        ]);

        auth()->user()->update($request->all());
        return back()->with('message', 'Data berhasil diubah!');
    }
}