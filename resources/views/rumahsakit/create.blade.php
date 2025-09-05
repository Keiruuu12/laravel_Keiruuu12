@extends('layouts.app')
@section('content')
<div>
    <h1>Tambah Rumah Sakit</h1>
</div>
<hr>

<form action="{{ route('rumahsakits.store') }}" method="POST">
    @include('rumahsakit.form', ['button' => 'Tambah'])
</form>
@endsection