@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">TAMBAH DATA POLIKLINIK</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/poliklinik/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_poli" class="form-label">NAMA POLIKLINIK</label>
                                    <input type="text" name="nama_poli"
                                        class="form-control @error('nama_poli')
                                        is-invalid
                                    @enderror"
                                        id="nama_poli" value="{{ old('nama_poli') }}">
                                    <div class="invalid-feedback">
                                        Nama Poliklinik Sudah Ada / Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">LOKASI</label>
                                    <input type="text" name="lokasi"
                                        class="form-control @error('lokasi')
                                        is-invalid
                                    @enderror"
                                        id="lokasi" value="{{ old('lokasi') }}">
                                    <div class="invalid-feedback">
                                        Lokasi Sudah Ada / Tidak Boleh Kosong
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="/admin/poliklinik/index" class="btn btn-info fas fas fa-times-circle"> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
