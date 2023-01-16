<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cetak Laporan Rekam Medis</title>
</head>

<body style="background-color: white;" onload="window.print()">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table style="width: 100%;">
                        <tr>
                            <td align="center">
                                <span style="line-height: 1.6; font-weight:bold; font-size:20px">
                                    PUSKESMAS
                                    <br>Desa Butang Baru Kecamatan Mandiangin Timur
                                </span>
                            </td>
                        </tr>
                    </table>

                    <hr class="line-title">
                    <p align="center">
                        LAPORAN REKAM MEDIS
                    </p>
                    <p align="right">
                        {{ date('j M Y', strtotime($awal)) }} s/d {{ date('j M Y', strtotime($akhir)) }}
                    </p>

                    <hr />
                    <table class="table table-bordered text-center" style="font-size: 13px">
                        <tr>
                            <th>NO</th>
                            <th>TGL PERIKSA</th>
                            <th>NAMA PASIEN</th>
                            <th>POLIKLINIK</th>
                            <th>KELUHAN</th>
                            <th>DOKTER</th>
                            <th>PERAWAT</th>
                            <th>DIAGNOSA</th>
                            <th>TENSI DARAH</th>
                            <th>OBAT</th>
                            <th>DOSIS</th>
                            <th>PEMBAYARAN</th>
                        </tr>
                        @foreach ($lap as $l)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ date('d/m/Y', strtotime($l->tgl_periksa)) }}</td>
                                <td>{{ $l->nama_pasien }}</td>
                                <td>{{ $l->nama_poli }}</td>
                                <td>{{ $l->keluhan }}</td>

                                @if ($l->id_dokter == 0)
                                    <td>-</td>
                                @elseif ($l->id_dokter)
                                    <td>{{ $l->nama_dokter }}</td>
                                @endif

                                @if ($l->id_perawat == 0)
                                    <td>-</td>
                                @elseif ($l->id_perawat)
                                    <td>{{ $l->nama_perawat }}</td>
                                @endif

                                <td>{{ $l->diagnosa }}</td>
                                <td>{{ $l->tensi_darah }} mmHg</td>
                                <td>{{ $l->nama_obat }}</td>
                                <td>{{ $l->dosis_obat }}</td>
                                <td>{{ $l->pembayaran }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
