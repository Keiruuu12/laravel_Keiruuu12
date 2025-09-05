@extends('layouts.app')
@section('content')
<div class="show-container">
    <div class="header">
        <h1>Biodata Rumah Sakit</h1>
    </div>
    <hr>

    <div class="info">
        <label for="" class="info-label">Nama: </label>
        <p class="info-patient">{{ $rumahsakit->nama }}</p>
    </div>

    <div class="info">
        <label for="" class="info-label">Alamat: </label>
        <p class="info-patient">{{ $rumahsakit->alamat }}</p>
    </div>

    <div class="info">
        <label for="" class="info-label">Email: </label>
        <p class="info-patient">{{ $rumahsakit->email }}</p>
    </div>

    <div class="info">
        <label for="" class="info-label">Nomor Telepon: </label>
        <p class="info-patient">{{ $rumahsakit->telepon }}</p>
    </div>

    <a href="{{ route('rumahsakits.index') }}" class="btn-back">Kembali</a>
</div>
@endsection