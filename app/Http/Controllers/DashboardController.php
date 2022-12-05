<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rekammedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pasien = Pasien::count();
        $dokter = Dokter::count();
        $rekammedis = Rekammedis::count();

        return view('dashboard', compact(['pasien','dokter','rekammedis']));
    }
}
