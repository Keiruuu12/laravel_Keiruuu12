@extends('layouts.app')
@section('content')
    <div>
        <h1>Biodata Rumah Sakit</h1>
    </div>
    <hr>

    <div>
        <label for="">Nama: </label>
        <p>{{ $rumahsakit->nama }}</p>
    </div>

    <div>
        <label for="">Alamat: </label>
        <p>{{ $rumahsakit->alamat }}</p>
    </div>

    <div>
        <label for="">Email: </label>
        <p>{{ $rumahsakit->email }}</p>
    </div>

    <div>
        <label for="">Nomor Telepon: </label>
        <p>{{ $rumahsakit->telepon }}</p>
    </div>
@endsection