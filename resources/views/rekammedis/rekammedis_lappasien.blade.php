<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <title>Cetak Laporan Rekam Medis</title>

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid;
        }

        .halaman {
            width: 92%;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 0px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

        .judul {
            text-align: center;
        }

        .fontisi{
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: white;" onload="window.print()">
    <div class="halaman">
        <p class="judul fontisi" style="font-size:30px">PUSKESMAS</p>
        <p class="judul fontisi" style="font-size:25px">Desa Butang Baru Kecamatan Mandiangin Timur</p>

        <hr class="line-title">
        <p align="center" style="font-size:20px">
            REKAM MEDIS PASIEN
        </p>
        <p align="right">
            Tanggal Periksa : {{ date('j M Y', strtotime($rekammedis->tgl_periksa)) }}
        </p>

        <hr />
        <br>

        <table class="fontisi" style="width: 100%">
            <tr>
                <td style="width: 30%">NAMA PASIEN</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->pasien->nama_pasien }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">USIA PASIEN</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->pasien->usia_pasien }} Tahun</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">JENIS KELAMIN</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->pasien->jenis_kelamin }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">ALAMAT</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->pasien->alamat }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">POLIKLINIK</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->poliklinik->nama_poli }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">KELUHAN</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->keluhan }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">DOKTER</td>
                <td style="width: 5%">:</td>
                @if ($rekammedis->id_dokter == 0)
                    <td style="width: 65%">-</td>
                @elseif ($rekammedis->id_dokter)
                    <td style="width: 65%">{{ $rekammedis->dokter->nama_dokter }}</td>
                @endif
            </tr>
            <br>
            <tr>
                <td style="width: 30%">PERAWAT</td>
                <td style="width: 5%">:</td>
                @if ($rekammedis->id_perawat == 0)
                    <td style="width: 65%">-</td>
                @elseif ($rekammedis->id_perawat)
                    <td style="width: 65%">{{ $rekammedis->perawat->nama_perawat }}</td>
                @endif
            </tr>
            <br>
            <tr>
                <td style="width: 30%">DIAGNOSA</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->diagnosa }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">OBAT</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->obat->nama_obat }} ({{ $rekammedis->obat->jenis_obat }})</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">DOSIS OBAT</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->obat->dosis_obat }}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%">PEMBAYARAN</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%">{{ $rekammedis->pembayaran }}</td>
            </tr>
        </table>
    </div>


</body>

</html>
