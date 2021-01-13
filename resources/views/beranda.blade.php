@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat Datang di Portal Informasi Siswa SMA 404</p>
        <a class="btn btn-dark" href="{{ url('/info-kegiatan') }}">Info Kegiatan</a>
        @can('isAdmin')
        <a class="btn btn-primary" href="{{ route('siswa.index') }}">Data Siswa</a>
        @endcan
    </div>


@endsection