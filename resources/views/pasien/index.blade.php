@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="index-container">
    <div class="header-content">
        <h1 id="header" class="header">Data Pasien</h1>
    </div>

    <div class="menu-container">
        <div class="menu">
            <a href="{{ route('pasiens.create') }}" class="menu-tambah">Tambah Pasien</a>
        </div>

        <div class="filter-container">
            <select name="rumahsakit" id="rumahsakit" class="filter-select">
                <option value="">All</option>
                @foreach ($rumahsakits as $rumahsakit)
                <option value="{{ $rumahsakit->id }}" class="option-filter">{{ $rumahsakit->nama }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="menu">
            <a href="{{ route('rumahsakits.index') }}" class="menu-data">Data Rumah Sakit</a>
        </div>
    </div>
    
    <table id="pasien-table" class="table table-striped" data-table="pasien">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Rumah Sakit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>
                    <a href="{{ route('pasiens.show', ['pasien' => $pasien->id]) }}" class="nama-table">{{ $pasien->nama }}</a>
                </td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->telepon }}</td>
                <td>{{ $pasien->rumahsakit->nama }}</td>
                <td>
                    <a href="{{ route('pasiens.edit', ['pasien' => $pasien->id]) }}" class="btn-edit">Edit</a>
                    <a href="" class="deleteData btn-delete" data-id="{{ $pasien->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="result"></div>
</div>

<div class="paginator">
    <div>{{ $pasiens->fragment('header')->links() }}</div>
</div>
<script>
$("#pasien-table").on("click", ".deleteData" , function(){
    const id = $(this).attr("data-id");
    const obj = $(this);
    $.ajax({
        type: "GET",
        url: "delete-pasien/"+id,
        success:function(data){
            $(obj).parent().remove();
        },
        error:function(err){
            console.log(err.responeText);
        }
    })
});

$('#rumahsakit').on('change', function () {
    const selectedId = $(this).val();

    $.ajax({
        url: "{{ route('pasiens.filter') }}",
        method: "GET",
        data: { rumahsakit_id: selectedId },
        success: function (res) {
            $('#pasien-table tbody').html(res.html);
        },
        error: function (xhr) {
            alert('Gagal memuat data pasien!');
        }
    });
});
</script>
@endsection