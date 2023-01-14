<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

// CONTROLLER DATA OBAT

class ObatController extends Controller
{
    // MENAMPILKAN DATA DI TABEL OBAT
    public function index()
    {
        $obat = Obat::all()->sortByDesc('id');
        return view('obat.obat_index', compact(['obat']));
    }

    // MENAMBAHKAN DATA DI TABEL OBAT
    public function create()
    {
        return view('obat.obat_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama_obat' => 'required|unique:obats,nama_obat',
                'ket_obat' => 'required',

            ]
        );

        Obat::create($request->all());
        return redirect('/admin/obat/index')->with('pesan','Data sudah disimpan!');
    }

    // MENGUPDATE DATA DI TABEL OBAT
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.obat_edit', compact(['obat']));
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $validasi = $request->validate(
            [
                'nama_obat' => 'required',
                'ket_obat' => 'required',
            ]
        );

        $obat->update($request->all());
        return redirect('/admin/obat/index')->with('pesan','Data sudah diubah!');
    }

    // MENGHAPUS DATA DI TABEL OBAT
    public function delete($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect('/admin/obat/index')->with('pesan','Data sudah dihapus!');
    }
}
