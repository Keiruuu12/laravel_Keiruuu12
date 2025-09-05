@extends('layouts.app')
@section('content')
    <div>
        <h1>Ubah Data Rumah Sakit</h1>
    </div>

    <form action="{{ route('rumahsakits.update', ['rumahsakit' => $rumahsakit->id]) }}" method="post">
        @method('PATCH')
        @include('rumahsakit.form', ['button' => 'Update'])
    </form>
@endsection