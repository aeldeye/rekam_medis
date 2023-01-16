<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\Poliklinik;
use App\Models\Rekammedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekammedisController extends Controller
{
    public function index()
    {
        $rekammedis = Rekammedis::all()->sortByDesc('id');
        return view('rekammedis.rekammedis_index', ['rekammedis' => $rekammedis]);
    }

    public function create()
    {
        $poli = Poliklinik::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $perawat = Perawat::all();
        $obat = Obat::all();
        return view('rekammedis.rekammedis_create', compact(['poli', 'pasien', 'dokter','obat','perawat']));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'tgl_periksa' => 'required',
                'id_poli' => 'required',
                'id_pasien' => 'required',
                'keluhan' => 'required',
                // 'id_dokter' => 'required',
                // 'id_dokter' => 'required',
                'diagnosa' => 'required',
                'tensi_darah' => 'required',
                'id_obat' => 'required',
            ]
        );

        Rekammedis::create($request->all());
        if (auth()->user()->level == 1)
            return redirect('/admin/rekammedis/index')->with('pesan', 'Data sudah disimpan!');
        elseif (auth()->user()->level == 2)
            return redirect('/user/rekammedis/index')->with('pesan', 'Data sudah disimpan!');
    }

    public function edit($id)
    {
        $rekammedis = Rekammedis::findOrFail($id);
        $poli = Poliklinik::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $perawat = Perawat::all();
        $obat = Obat::all();
        return view('rekammedis.rekammedis_edit', compact(['rekammedis', 'poli', 'pasien', 'dokter','obat','perawat']));
    }

    public function update(Request $request, $id)
    {
        $rekammedis = Rekammedis::findOrFail($id);

        $validasi = $request->validate(
            [
                'tgl_periksa' => 'required',
                'id_poli' => 'required',
                'id_pasien' => 'required',
                'keluhan' => 'required',
                'id_dokter' => 'required',
                'diagnosa' => 'required',
                'tensi_darah' => 'required',
                'id_obat' => 'required',
            ]
        );

        $rekammedis->update($request->all());
        if (auth()->user()->level == 1)
            return redirect('/admin/rekammedis/index')->with('pesan', 'Data sudah diubah!');
        elseif (auth()->user()->level == 2)
            return redirect('/user/rekammedis/index')->with('pesan', 'Data sudah diubah!');
    }

    public function delete($id)
    {
        $rekammedis = Rekammedis::findOrFail($id);
        $rekammedis->delete();

        if (auth()->user()->level == 1)
            return redirect('/admin/rekammedis/index')->with('pesan', 'Data sudah dihapus!');
        elseif (auth()->user()->level == 2)
            return redirect('/user/rekammedis/index')->with('pesan', 'Data sudah dihapus!');
    }

    public function view($id)
    {
        $rekammedis = Rekammedis::findOrFail($id);
        $poli = Poliklinik::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $perawat = Perawat::all();
        $obat = Obat::all();
        return view('rekammedis.rekammedis_view', compact(['rekammedis', 'poli', 'pasien', 'dokter','obat','perawat']));
    }

    public function lappasien($id)
    {

        $rekammedis = Rekammedis::findOrFail($id);
        $poli = Poliklinik::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $perawat = Perawat::all();
        $obat = Obat::all();

        $pdf_doc = PDF::loadView('rekammedis.rekammedis_lappasien', compact('rekammedis', 'poli', 'pasien', 'dokter','obat','perawat'))->setPaper('a4', 'portrait');

        return $pdf_doc->stream('laporan_pasien.pdf');
    }
}
