@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">DATA DOKTER</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered text-center">
                                    <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/dokter/create"
                                        title="Tambah Dokter"></a>
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA DOKTER</th>
                                            <th>SPESIALIS</th>
                                            <th>ALAMAT</th>
                                            <th>NO TELEPON</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dokter as $dktr)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $dktr->nama_dokter }}</td>
                                                <td>{{ $dktr->spesialis }}</td>
                                                <td>{{ $dktr->alamat }}</td>
                                                <td>{{ $dktr->no_telp }}</td>
                                                <td>
                                                    <a href="/admin/dokter/{{ $dktr->id }}/edit"
                                                        class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                    <a href="/admin/dokter/{{ $dktr->id }}/delete"
                                                        class="btn btn-danger fas fa-trash-alt" title="Hapus"
                                                        onclick="return confirm('Anda yakin?')"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
