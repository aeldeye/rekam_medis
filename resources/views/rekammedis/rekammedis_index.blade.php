@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">REKAM MEDIS</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered text-center">
                                    @if (auth()->user()->level == 1)
                                        <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/rekammedis/create"
                                            title="Tambah Rekam Medis"></a>
                                    @elseif(auth()->user()->level == 2)
                                        <a class="btn btn-primary btn-lg fas fa-plus-square" href="/user/rekammedis/create"
                                            title="Tambah Rekam Medis"></a>
                                    @endif
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th>NO</th>
                                            <th>TANGGAL PERIKSA</th>
                                            <th>NAMA PASIEN</th>
                                            <th>POLIKLINIK</th>
                                            <th>KELUHAN</th>
                                            <th>DOKTER</th>
                                            <th>PERAWAT</th>
                                            <th>DIAGNOSA</th>
                                            <th>OBAT</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach ($rekammedis as $rm)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ date('j M Y', strtotime($rm->tgl_periksa)) }}</td>
                                            <td>{{ $rm->pasien->nama_pasien }}</td>
                                            <td>{{ $rm->poliklinik->nama_poli }}</td>
                                            <td>{{ $rm->keluhan }}</td>

                                            @if ($rm->id_dokter == Null)
                                                <td>-</td>
                                            @elseif ($rm->id_dokter)
                                                <td>{{ $rm->dokter->nama_dokter }}</td>
                                            @endif

                                            @if ($rm->id_perawat == Null)
                                                <td>-</td>
                                            @elseif ($rm->id_perawat)
                                                <td>{{ $rm->perawat->nama_perawat }}</td>
                                            @endif

                                            <td>{{ $rm->diagnosa }}</td>
                                            <td>{{ $rm->obat->nama_obat }}</td>
                                            <td>
                                                @if (auth()->user()->level == 1)
                                                    <a href="/admin/rekammedis/{{ $rm->id }}/edit"
                                                        class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                    <a href="/admin/rekammedis/{{ $rm->id }}/delete"
                                                        class="btn btn-danger fas fa-trash-alt" title="Hapus"
                                                        onclick="return confirm('Anda yakin?')"></a>
                                                @elseif(auth()->user()->level == 2)
                                                    <a href="/admin/rekammedis/{{ $rm->id }}/edit"
                                                        class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                    <a href="/admin/rekammedis/{{ $rm->id }}/delete"
                                                        class="btn btn-danger fas fa-trash-alt" title="Hapus"
                                                        onclick="return confirm('Anda yakin?')"></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
