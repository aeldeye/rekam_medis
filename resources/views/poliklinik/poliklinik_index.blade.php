@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">DATA POLIKLINIK</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="poli" class="table table-hover table-bordered text-center">
                                    <a class="btn btn-primary btn-lg fas fa-plus-square" href="/admin/poliklinik/create" title="Tambah Poliklinik"></a>
                                    <br><br>
                                    <thead class="table-light">
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA POLIKLINIK</th>
                                            <th>LOKASI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    @foreach ($poliklinik as $poli)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $poli->nama_poli }}</td>
                                            <td>{{ $poli->lokasi }}</td>
                                            <td>
                                                <a href="/admin/poliklinik/{{ $poli->id }}/edit"
                                                    class="btn btn-warning fas fa-edit" title="Edit"></a>
                                                <a href="/admin/poliklinik/{{ $poli->id }}/delete"
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
            $('#poli').DataTable(
                {
                    "searching":true,
                    "paging":true,
                }
            );
        });
    </script>
@endpush
