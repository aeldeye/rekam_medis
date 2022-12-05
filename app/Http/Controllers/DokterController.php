<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

// CONTROLLER DATA DOKTER

class DokterController extends Controller
{
    // MENAMPILKAN DATA DI TABEL DOKTER
    public function index()
    {
        $dokter = Dokter::orderBy('id','desc')->paginate(10);
        return view('dokter.dokter_index', compact(['dokter']));
    }

    // MENAMBAHKAN DATA DI TABEL DOKTER
    public function create()
    {
        return view('dokter.dokter_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama_dokter' => 'required',
                'spesialis' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required|unique:dokters,no_telp'
            ]
        );
        Dokter::create($request->all());

        return redirect('admin/dokter/index')->with('pesan','Data sudah disimpan!');
    }

    // MENGUPDATE DATA DI TABEL DOKTER
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.dokter_edit', compact(['dokter']));
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);

        $validasi = $request->validate(
            [
                'nama_dokter' => 'required',
                'spesialis' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
            ]
        );

        $dokter->update($request->all());

        return redirect('/admin/dokter/index')->with('pesan','Data sudah diubah!');
    }

    // MENGHAPUS DATA DI TABEL DOKTER
    public function delete($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect('/admin/dokter/index')->with('pesan','Data sudah dihapus!');
    }
}
