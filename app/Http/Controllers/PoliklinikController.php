<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

// CONTROLLER DATA POLIKLINIK

class PoliklinikController extends Controller
{
    // MENAMPILKAN DATA DI TABEL POLIKLINIK
    public function index()
    {
        $poliklinik = Poliklinik::orderBy('id','desc')->paginate(10);
        return view('poliklinik.poliklinik_index', compact(['poliklinik']));
    }

    // MENAMBAHKAN DATA DI TABEL POLIKLINIK
    public function create()
    {
        return view('poliklinik.poliklinik_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama_poli' => 'required|unique:polikliniks,nama_poli',
                'lokasi' => 'required|unique:polikliniks,lokasi',
            ]
        );

        Poliklinik::create($request->all());
        return redirect('/admin/poliklinik/index')->with('pesan','Data sudah disimpan!');
    }

    // MENGUPDATE DATA DI TABEL POLIKLINIK
    public function edit($id)
    {
        $poliklinik = Poliklinik::findOrFail($id);
        return view('poliklinik.poliklinik_edit',compact(['poliklinik']));
    }

    public function update(Request $request, $id)
    {
        $poliklinik = Poliklinik::findOrFail($id);

        $validasi = $request->validate(
            [
                'nama_poli' => 'required',
                'lokasi' => 'required',
            ]
        );

        $poliklinik->update($request->all());
        return redirect('/admin/poliklinik/index')->with('pesan','Data sudah diubah!');
    }

    // MENGHAPUS DATA DI TABEL POLIKLINIK
    public function delete($id)
    {
        $poliklinik = Poliklinik::findOrFail($id);
        $poliklinik->delete();

        return redirect('/admin/poliklinik/index')->with('pesan','Data sudah dihapus!');
    }
}
