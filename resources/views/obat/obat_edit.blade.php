@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">EDIT DATA OBAT</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/obat/{{ $obat->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_obat" class="form-label">NAMA OBAT</label>
                                    <input type="text" name="nama_obat"
                                        class="form-control @error('nama_obat')
                                        is-invalid
                                    @enderror"
                                        id="nama_obat" value="{{ $obat->nama_obat }}">
                                    <div class="invalid-feedback">
                                        Nama Obat Sudah Ada / Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_obat" class="form-label">JENIS OBAT</label>
                                    <select
                                        class="form-select @error('jenis_obat')
                                    is-invalid
                                @enderror"
                                        name="jenis_obat" id="">
                                        <option value="">Pilih Jenis Obat</option>
                                        <option value="Kapusl" {{ $obat->jenis_obat == "Kapsul" ? 'selected' : ''}}>Kapsul</option>
                                        <option value="Pil" {{ $obat->jenis_obat == "Pil" ? 'selected' : ''}}>Pil</option>
                                        <option value="Salep" {{ $obat->jenis_obat == "Salep" ? 'selected' : ''}}>Salep</option>
                                        <option value="Serbuk" {{ $obat->jenis_obat == "Serbuk" ? 'selected' : ''}}>Serbuk</option>
                                        <option value="Sirup" {{ $obat->jenis_obat == "Sirup" ? 'selected' : ''}}>Sirup</option>
                                        <option value="Tablet" {{ $obat->jenis_obat == "Tablet" ? 'selected' : ''}}>Tablet</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan Pilih Jenis Obat
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="ket_obat" class="form-label">KETERANGAN OBAT</label>
                                    <textarea
                                        class="form-control @error('ket_obat')
                                    is-invalid
                                    @enderror"
                                        name="ket_obat" rows="10">{{ $obat->ket_obat }}</textarea>
                                    <div class="invalid-feedback">
                                        Keterangan Obat Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="dosis_obat" class="form-label">DOSIS OBAT</label>
                                    <input type="text" name="dosis_obat"
                                        class="form-control @error('dosis_obat')
                                        is-invalid
                                    @enderror"
                                        id="dosis_obat" value="{{ $obat->dosis_obat }}">
                                    <div class="invalid-feedback">
                                        Dosis Obat Tidak Boleh Kosong
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="/admin/obat/index" class="btn btn-info fas fas fa-times-circle"> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
