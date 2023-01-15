@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">DATA OBAT</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="obat" class="table table-hover table-bordered text-center">
                                    <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/obat/create"
                                        title="Tambah Obat"></a>
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">NAMA OBAT</th>
                                            <th class="text-center">JENIS</th>
                                            <th class="text-center">KETERANGAN OBAT</th>
                                            <th class="text-center">DOSIS OBAT</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach ($obat as $obt)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $obt->nama_obat }}</td>
                                            <td>{{ $obt->jenis_obat }}</td>
                                            <td>{{ $obt->ket_obat }}</td>
                                            <td>{{ $obt->dosis_obat }}</td>
                                            <td>
                                                <a href="/admin/obat/{{ $obt->id }}/edit"
                                                    class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                <a href="/admin/obat/{{ $obt->id }}/delete"
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
@push('scripts2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#obat').DataTable(
                {
                    "searching":true,
                    "paging":true,
                }
            );
        });
    </script>
@endpush
