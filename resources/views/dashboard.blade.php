@extends('layouts.master')
@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Selamat Datang di Aplikasi Rekam Medis , <span>{{ auth()->user()->name }}</span></h3>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body text-white">
                                    <h3 class="fas fa-procedures"> Pasien</h3>
                                    <h2>{{ $pasien }}</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    @if (auth()->user()->level == '1')
                                        <a href="{{ url('admin/pasien/index') }}"
                                            class="small text-white stretched-link">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-success mb-4">
                                <div class="card-body text-white">
                                    <h3 class="fas fa-user-md"> Dokter</h3>
                                    <h2>{{ $dokter }}</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    @if (auth()->user()->level == '1')
                                        <a href="{{ url('admin/dokter/index') }}"
                                            class="small text-white stretched-link">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body text-white">
                                    <h3 class="fas fa-notes-medical"> Rekam Medis</h3>
                                    <h2>{{ $rekammedis }}</h2>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    @if (auth()->user()->level == 1)
                                        <a href="{{ url('admin/rekammedis/index') }}"
                                            class="small text-white stretched-link">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    @elseif(auth()->user()->level == 2)
                                        <a href="{{ url('user/rekammedis/index') }}"
                                            class="small text-white stretched-link">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
