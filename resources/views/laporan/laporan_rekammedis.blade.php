@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">LAPORAN REKAM MEDIS</h3>
                    <div class="card">
                        <div class="card-body">
                            @if (auth()->user()->level == 1)
                                <form action="/admin/laporan/download" enctype="multipart/form-data" method="POST" target="blank">
                                @elseif(auth()->user()->level == 2)
                                    <form action="/user/laporan/download" enctype="multipart/form-data" method="POST" target="blank">
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Awal</label>
                                        <input type="date" name="awal" id="awal" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Akhir</label>
                                        <input type="date" name="akhir" id="akhir" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Cetak
                            </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
