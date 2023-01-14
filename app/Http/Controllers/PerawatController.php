<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    // MENAMPILKAN DATA DI TABEL PERAWAT
    public function index()
    {
        $perawat = Perawat::all()->sortByDesc('id');
        return view('perawat.perawat_index', compact(['perawat']));
    }

    // MENAMBAHKAN DATA DI TABEL PERAWAT
    public function create()
    {
        return view('perawat.perawat_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama_perawat' => 'required',
                'spesialis' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required|unique:perawats,no_telp'
            ]
        );
        Perawat::create($request->all());

        return redirect('admin/perawat/index')->with('pesan','Data sudah disimpan!');
    }

    // MENGUPDATE DATA DI TABEL PERAWAT
    public function edit($id)
    {
        $perawat = Perawat::findOrFail($id);
        return view('perawat.perawat_edit', compact(['perawat']));
    }

    public function update(Request $request, $id)
    {
        $perawat = Perawat::findOrFail($id);

        $validasi = $request->validate(
            [
                'nama_perawat' => 'required',
                'spesialis' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
            ]
        );

        $perawat->update($request->all());

        return redirect('/admin/perawat/index')->with('pesan','Data sudah diubah!');
    }

    // MENGHAPUS DATA DI TABEL PERAWAT
    public function delete($id)
    {
        $perawat = Perawat::findOrFail($id);
        $perawat->delete();

        return redirect('/admin/perawat/index')->with('pesan','Data sudah dihapus!');
    }
}
