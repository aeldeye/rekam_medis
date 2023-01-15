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
                                <table id="dokter" class="table table-hover table-bordered text-center">
                                    <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/dokter/create"
                                        title="Tambah Dokter"></a>
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">NAMA DOKTER</th>
                                            <th class="text-center">SPESIALIS</th>
                                            <th class="text-center">ALAMAT</th>
                                            <th class="text-center">NO TELEPON</th>
                                            <th class="text-center">AKSI</th>
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
@push('scripts2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dokter').DataTable(
                {
                    "searching":true,
                    "paging":true,
                }
            );
        });
    </script>
@endpush
