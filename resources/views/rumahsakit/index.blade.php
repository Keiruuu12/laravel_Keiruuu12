@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="index-container">
    <div class="header-content">
        <h1 id="header" class="header">DATA RUMAH SAKIT</h1>
    </div>

    <div class="menu-container">
        <div class="menu">
            <a href="{{ route('rumahsakits.create') }}" class="menu-tambah">Tambah Rumah Sakit</a>
        </div>
        <div class="menu">
            <a href="{{ route('pasiens.index') }}" class="menu-data">Data Pasien</a>
        </div>
    </div>
    <table id="rumahsakit-table" class="table table-striped" data-table="rumahsakit">
        <tr>
            <th>Nama Rumah Sakit</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Action</th>
        </tr>
        @foreach ($rumahsakits as $rumahsakit)
        <tr>
            <td>
                <a href="{{ route('rumahsakits.show', ['rumahsakit' => $rumahsakit->id]) }}" class="nama-table">{{ $rumahsakit->nama }}</a>
            </td>
            <td>{{ $rumahsakit->alamat }}</td>
            <td>{{ $rumahsakit->email }}</td>
            <td>{{ $rumahsakit->telepon }}</td>
            <td>
                <a href="{{ route('rumahsakits.edit', ['rumahsakit' => $rumahsakit->id]) }}" class="btn-edit">Edit</a>
                <a href="" data-id="{{ $rumahsakit->id }}" class="deleteData btn-delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="paginator">
    <div>{{ $rumahsakits->fragment('header')->links() }}</div>
</div>
<script>
    $("#rumahsakit-table").on("click", ".deleteData" , function(){
    const id = $(this).attr("data-id");
    const obj = $(this);
    $.ajax({
        type: "GET",
        url: "delete-rumahsakit/"+id,
        success:function(data){
            $(obj).parent().remove();
        },
        error:function(err){
            console.log(err.responeText);
        }
    })
});
</script>
@endsection