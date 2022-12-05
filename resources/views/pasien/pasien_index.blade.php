@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">DATA PASIEN</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered text-center">
                                    <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/pasien/create"
                                        title="Tambah Pasien"></a>
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th>NO</th>
                                            <th>NO IDENTITAS</th>
                                            <th>NAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>ALAMAT</th>
                                            <th>NO TELEPON</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach ($pasien as $psn)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $psn->nomor_identitas }}</td>
                                            <td>{{ $psn->nama_pasien }}</td>
                                            <td>{{ $psn->jenis_kelamin }}</td>
                                            <td>{{ $psn->alamat }}</td>
                                            <td>{{ $psn->no_telp }}</td>
                                            <td>
                                                <a href="/admin/pasien/{{ $psn->id }}/edit"
                                                    class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                <a href="/admin/pasien/{{ $psn->id }}/delete"
                                                    class="btn btn-danger fas fa-trash-alt" title="Hapus"
                                                    onclick="return confirm('Anda yakin?')"></a>
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
