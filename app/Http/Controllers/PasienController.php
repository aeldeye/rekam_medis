<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

// CONTROLLER DATA PASIEN

class PasienController extends Controller
{
    // MENAMPILKAN DATA DI TABEL PASIEN 
    public function index()
    {
        $pasien = Pasien::orderBy('id','desc')->paginate(10);
        return view('pasien.pasien_index', compact(['pasien']));
    }

    // MENAMBAHKAN DATA DI TABEL PASIEN
    public function create()
    {
        return view('pasien.pasien_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nomor_identitas' => 'required|unique:pasiens,nomor_identitas',
                'nama_pasien' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required|unique:pasiens,no_telp',
            ]
        );

        Pasien::create($request->all());
        return redirect('/admin/pasien/index')->with('pesan','Data sudah disimpan!');
    }

    // MENGUPDATE DATA DI TABEL PASIEN
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.pasien_edit',compact(['pasien']));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        
        $validasi = $request->validate(
            [
                'nomor_identitas' => 'required',
                'nama_pasien' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
            ]
        );

        $pasien->update($request->all());
        return redirect('/admin/pasien/index')->with('pesan','Data sudah diubah!');
    }

    // MENGHAPUS DATA DI TABEL PASIEN
    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect('/admin/pasien/index')->with('pesan','Data sudah dihapus!');
    }
}
