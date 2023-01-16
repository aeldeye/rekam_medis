@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">DATA REKAM MEDIS</h3>
                    <div class="card">
                        <div class="card-body">
                            @if (auth()->user()->level == 1)
                                <form action="/admin/rekammedis/{{ $rekammedis->id }}/lappasien" enctype="multipart/form-data"
                                    method="POST" target="_blank">
                                @elseif(auth()->user()->level == 2)
                                    <form action="/user/rekammedis/{{ $rekammedis->id }}/lappasien"
                                        enctype="multipart/form-data" method="POST" target="_blank">
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="tgl_periksa" class="form-label">TANGGAL PERIKSA</label>
                                <input type="date" name="tgl_periksa" disabled class="form-control" id="tgl_periksa"
                                    value="{{ $rekammedis->tgl_periksa }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_poli" class="form-label">POLIKLINIK</label>
                                <select class="form-select" name="id_poli" id="id_poli" disabled>
                                    @foreach ($poli as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_poli ? 'selected' : '' }}>{{ $item->nama_poli }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_pasien" class="form-label">NAMA PASIEN</label>
                                <select class="form-select" name="id_pasien" id="id_Pasien" disabled>
                                    @foreach ($pasien as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_pasien ? 'selected' : '' }}>
                                            {{ $item->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_pasien" class="form-label">USIA PASIEN</label>
                                <select class="form-select" name="id_pasien" id="id_Pasien" disabled>
                                    @foreach ($pasien as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_pasien ? 'selected' : '' }}>
                                            {{ $item->usia_pasien }} Tahun</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" disabled>
                                    @foreach ($pasien as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_pasien ? 'selected' : '' }}>
                                            {{ $item->jenis_kelamin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">ALAMAT</label>
                                <select class="form-select" name="alamat" id="alamat" disabled>
                                    @foreach ($pasien as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_pasien ? 'selected' : '' }}>
                                            {{ $item->alamat }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">KELUHAN</label>
                                <textarea class="form-control" name="keluhan" rows="10" disabled>{{ $rekammedis->keluhan }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="id_dokter" class="form-label">DOKTER</label>
                                <select class="form-select" name="id_dokter" id="id_dokter" disabled>
                                    <option value="">-</option>
                                    @foreach ($dokter as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_dokter ? 'selected' : '' }}>
                                            {{ $item->nama_dokter }}
                                            ({{ $item->spesialis }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_perawat" class="form-label">PERAWAT</label>
                                <select class="form-select" name="id_perawat" id="id_perawat" disabled>
                                    <option value="">-</option>
                                    @foreach ($perawat as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_perawat ? 'selected' : '' }}>
                                            {{ $item->nama_perawat }}
                                            ({{ $item->spesialis }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="diagnosa" class="form-label">DIAGNOSA</label>
                                <textarea class="form-control" name="diagnosa" rows="10" disabled>{{ $rekammedis->diagnosa }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="id_obat" class="form-label">OBAT</label>
                                <select class="form-select" name="id_obat" id="id_Obat" disabled>
                                    @foreach ($obat as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_obat ? 'selected' : '' }}>
                                            {{ $item->nama_obat }}
                                            ({{ $item->jenis_obat }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tensi_darah" class="form-label">TENSI DARAH</label>
                                <input type="text" name="tensi_darah" class="form-control" id="tensi_darah" disabled
                                    value="{{ $rekammedis->tensi_darah }} mmHg">
                            </div>
                            <div class="mb-3">
                                <label for="dosis_obat" class="form-label">DOSIS</label>
                                <select class="form-select" name="dosis_obat" id="id_Obat2" disabled>
                                    <option value="">Pilih Dosis</option>
                                    @foreach ($obat as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $rekammedis->id_obat ? 'selected' : '' }}>
                                            {{ $item->nama_obat }}
                                            ({{ $item->dosis_obat }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pembayaran" class="form-label">PEMBAYARAN</label>
                                <input type="text" name="pembayaran" disabled class="form-control" id="pembayaran"
                                    value="{{ $rekammedis->pembayaran }}">
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-print"></i> Cetak
                            </button>
                            @if (auth()->user()->level == 1)
                                <a href="/admin/rekammedis/index" class="btn btn-info fas fas fa-times-circle">
                                    Kembali</a>
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
