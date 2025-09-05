@extends('layouts.app')
@section('content')
<div class="index-container">
    <div>
        <h1>Ubah Data Pasien</h1>
    </div>
    <hr>

    <form action="{{ route('pasiens.update', ['pasien' => $pasien->id]) }}" method="post">
        @method('PATCH')
        @include('pasien.form', ['button' => 'Update'])
    </form>
@endsection
</div>