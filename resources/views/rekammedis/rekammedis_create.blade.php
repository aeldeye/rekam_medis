@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">TAMBAH REKAM MEDIS</h3>
                    <div class="card">
                        <div class="card-body">
                            @if (auth()->user()->level == 1)
                                <form action="/admin/rekammedis/store" method="POST">
                                @elseif(auth()->user()->level == 2)
                                    <form action="/user/rekammedis/store" method="POST">
                            @endif
                            {{-- <form action="/admin/rekammedis/store" method="POST"> --}}
                            @csrf
                            <div class="mb-3">
                                <label for="tgl_periksa" class="form-label">TANGGAL PERIKSA</label>
                                <input type="date" name="tgl_periksa"
                                    class="form-control @error('tgl_periksa')
                                is-invalid
                            @enderror"
                                    id="nomor_identitas" value="{{ old('tgl_periksa') }}">
                                <div class="invalid-feedback">
                                    Tanggal Periksa Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_poli" class="form-label">POLIKLINIK</label>
                                <select
                                    class="form-select @error('id_poli')
                            is-invalid
                        @enderror"
                                    name="id_poli" id="id_poli">
                                    <option value="">Pilih Poliklinik</option>
                                    @foreach ($poli as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_poli }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Poliklinik
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_pasien" class="form-label">NAMA PASIEN</label>
                                <select
                                    class="form-select @error('id_pasien')
                            is-invalid
                        @enderror"
                                    name="id_pasien" id="id_Pasien">
                                    <option value="">Pilih Pasien</option>
                                    @foreach ($pasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Pasien
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">KELUHAN</label>
                                <textarea
                                    class="form-control @error('keluhan')
                            is-invalid
                        @enderror"
                                    name="keluhan" rows="10">{{ old('keluhan') }}</textarea>
                                <div class="invalid-feedback">
                                    Keluhan Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_dokter" class="form-label">DOKTER</label>
                                <select
                                    class="form-select @error('id_dokter')
                            is-invalid
                        @enderror"
                                    name="id_dokter" id="id_dokter">
                                    <option value="">-</option>
                                    @foreach ($dokter as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_dokter }} ({{ $item->spesialis }}) </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Dokter
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_perawat" class="form-label">PERAWAT</label>
                                <select
                                    class="form-select @error('id_perawat')
                            is-invalid
                        @enderror"
                                    name="id_perawat" id="id_perawat">
                                    <option value="">-</option>
                                    @foreach ($perawat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_perawat }} ({{ $item->spesialis }}) </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Perawat
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="diagnosa" class="form-label">DIAGNOSA</label>
                                <textarea
                                    class="form-control @error('diagnosa')
                            is-invalid
                        @enderror"
                                    name="diagnosa" rows="10">{{ old('diagnosa') }}</textarea>
                                <div class="invalid-feedback">
                                    Diagnosa Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_obat" class="form-label">OBAT</label>
                                <select
                                    class="form-select @error('id_obat')
                            is-invalid
                        @enderror"
                                    name="id_obat" id="id_Obat">
                                    <option value="">Pilih Obat</option>
                                    @foreach ($obat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_obat }} ({{ $item->jenis_obat }})</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Obat
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_obat" class="form-label">DOSIS</label>
                                <select
                                    class="form-select @error('id_obat')
                            is-invalid
                        @enderror"
                                    name="id_obat" id="id_Obat2">
                                    <option value="">Pilih Dosis</option>
                                    @foreach ($obat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_obat }} ({{ $item->dosis_obat }})</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Obat
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pembayaran" class="form-label">PEMBAYARAN</label>
                                <select
                                    class="form-select @error('pembayaran')
                                is-invalid
                            @enderror"
                                    name="pembayaran" id="">
                                    <option value="">Pilih Jenis Pembayaran</option>
                                    <option value="BPJS">BPJS</option>
                                    <option value="Umum">Umum</option>
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan Pilih Jenis Pembayaran
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            @if (auth()->user()->level == 1)
                                <a href="/admin/rekammedis/index" class="btn btn-info fas fas fa-times-circle"> Kembali</a>
                            @elseif(auth()->user()->level == 2)
                                <a href="/user/rekammedis/index" class="btn btn-info fas fas fa-times-circle"> Kembali</a>
                            @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#id_Pasien').select2();
        $('#id_Obat').select2();
        $('#id_Obat2').select2();
    </script>
@endpush
