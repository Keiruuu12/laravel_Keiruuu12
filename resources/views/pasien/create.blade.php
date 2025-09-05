@extends('layouts.app')
@section('content')
<div>
    <h1>Tambah Pasien</h1>
</div>
<hr>

<form action="{{ route('pasiens.store') }}" method="POST">
    @include('pasien.form', ['button' => 'Tambah'])
</form>
@endsection