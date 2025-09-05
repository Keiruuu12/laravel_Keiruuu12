@extends('layouts.app')
@section('content')
<div class="show-container">
    <div class="header">
        <h1>Biodata Pasien</h1>
    </div>
    <hr>

    <div class="info">
        <label for="" class="info-label">Nama: </label>
        <p class="info-patient">{{ $pasien->nama }}</p>
    </div>

    <div class="info">
        <label for="" class="info-label">Alamat: </label>
        <p class="info-patient">{{ $pasien->alamat }}</p>
    </div>

    <div class="info">
        <label for="" class="info-label">Nomor Telepon: </label>
        <p class="info-patient">{{ $pasien->telepon }}</p>
    </div>
    
    <div class="info">
        <label for="" class="info-label">Rumah Sakit: </label>
        <p class="info-patient">{{ $pasien->rumahsakit->nama }}</p>
    </div>

    <a href="{{ route('pasiens.index') }}" class="btn-back">Kembali</a>
</div>
@endsection