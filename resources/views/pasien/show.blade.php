@extends('layouts.app')
@section('content')
    <div>
        <h1>Biodata Pasien</h1>
    </div>
    <hr>

    <div>
        <label for="">Nama: </label>
        <p>{{ $pasien->nama }}</p>
    </div>

    <div>
        <label for="">Alamat: </label>
        <p>{{ $pasien->alamat }}</p>
    </div>

    <div>
        <label for="">Nomor Telepon: </label>
        <p>{{ $pasien->telepon }}</p>
    </div>
    
    <div>
        <label for="">Rumah Sakit: </label>
        <p>{{ $pasien->rumahsakit->nama }}</p>
    </div>

    <a href="{{ route('pasiens.index') }}">Kembali</a>
@endsection