<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pegawai', [
            'title'   => 'Pegawai',
            'pegawai' => Pegawai::latest()->search(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pegawai-tambah', ['title' => 'Tambah data pegawai']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'          => 'required',
            'alamat'        => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama'         => 'required',
            'jabatan'       => 'required',
            'gambar'        => 'image|file|max:10240'
        ]);

        if($request->file('gambar')) {
            $filename = now()->format('d-m-Y') . '-' . time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $validatedData['gambar'] = $request->file('gambar')->move('assets/images/profile', $filename);
        }

        Pegawai::create($validatedData);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.pegawai-edit', [
            'title'   => 'Edit data pegawai',
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'nama'          => 'required',
            'alamat'        => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required', 
            'agama'         => 'required',
            'jabatan'       => 'required',
            'gambar'        => 'image|file|max:10240'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $filename = now()->format('d-m-Y') . '-' . time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $validatedData['gambar'] = $request->file('gambar')->move('assets/images/profile', $filename);
        }

        Pegawai::where('id', $pegawai->id)->update($validatedData);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        if($pegawai->gambar) {
            Storage::delete($pegawai->gambar);
        }

        Pegawai::destroy($pegawai->id);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil dihapus!');
    }
}