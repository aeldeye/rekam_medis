@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">EDIT DOKTER</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/dokter/{{ $dokter->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_dokter" class="form-label">NAMA DOKTER</label>
                                    <input type="text" name="nama_dokter"
                                        class="form-control @error('nama_dokter')
                                        is-invalid
                                    @enderror"
                                        id="nama_dokter" value="{{ $dokter->nama_dokter }}">
                                    <div class="invalid-feedback">
                                        Nama Dokter Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="spesialis" class="form-label">SPESIALIS</label>
                                    <input type="text" name="spesialis"
                                        class="form-control @error('spesialis')
                                        is-invalid
                                    @enderror"
                                        id="spesialis" value="{{ $dokter->spesialis }}">
                                    <div class="invalid-feedback">
                                        Spesialis Dokter Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">ALAMAT</label>
                                    <textarea
                                        class="form-control @error('alamat')
                                    is-invalid
                                    @enderror"
                                        name="alamat" rows="10">{{ $dokter->alamat }}</textarea>
                                    <div class="invalid-feedback">
                                        Alamat Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">NO TELEPON</label>
                                    <input type="number" name="no_telp"
                                        class="form-control @error('no_telp')
                                    is-invalid
                                    @enderror"
                                        id="no_telp" value="{{ $dokter->no_telp }}">
                                    <div class="invalid-feedback">
                                        No Telepon Tidak Boleh Kosong
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="/admin/dokter/index" class="btn btn-info fas fas fa-times-circle"> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
