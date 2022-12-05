<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.laporan_rekammedis');
    }

    public function downloadlap(Request $request)
    {
        $tglsekarang = date('d M Y', strtotime(now()));

        $awal = $request->awal;
        $akhir = $request->akhir;

        $lap = DB::select('SELECT * FROM `rekammedis` JOIN `polikliniks` ON rekammedis.id_poli = polikliniks.id 
        JOIN `pasiens` ON rekammedis.id_pasien = pasiens.id
        JOIN `dokters` ON rekammedis.id_dokter = dokters.id
        JOIN `perawats` ON rekammedis.id_perawat = perawats.id
        JOIN `obats` ON rekammedis.id_obat = obats.id
         WHERE tgl_periksa BETWEEN ? AND ?', [$awal, $akhir]);

        view()->share('lap', $lap);

        $pdf_doc = PDF::loadView('laporan.laporan_rmcetak', compact('lap', 'awal', 'akhir', 'tglsekarang'))->setPaper('a4', 'landscape');

        return $pdf_doc->stream('laporan-rekammedis.pdf');
    }
}
