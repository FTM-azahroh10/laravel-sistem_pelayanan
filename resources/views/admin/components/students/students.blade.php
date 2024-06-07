@extends('admin.layouts.main')
@section('style')

<style>
    body {
        width: 100%;
        height: 100%;
    }

    h2 {
        text-align: center;
    }

    #actions {
        width: 100%;
        margin: auto;
        margin-bottom: 10px;
        /* Ubah margin-bottom menjadi 0 */
        border-collapse: collapse;
        margin-top: 20px;
        display: flex;
        background-color: #243364;
        padding: 10px 15px;
        justify-content: space-between;
    }

    .main-header {
        display: flex;
        align-items: center;
        width: 100%
    }

    .main-header h3 {
        color: white;
        margin-right: 20px;
        /* Jarak antara h3 dan input */
    }


    #search-input {
        width: 200px;
        height: 45px;
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .student-list {
        width: 90%;
        margin: auto;
        margin-top: 0;
        /* Ubah margin-top menjadi 0 */
        border-collapse: collapse;
    }

    .student-list th,
    .student-list td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        background-color: #fff;
        /* Latar belakang putih */
    }

    .student-list th {
        background-color: #f2f2f2;
    }

    .student-list tr:hover {
        background-color: #f5f5f5;
        /* Warna latar belakang saat dihover */
    }


    button {
        margin: 5px;
        padding: 10px;
        cursor: pointer;
    }

    .edit-icon {
        font-size: 20px;
        /* Sesuaikan ukuran ikon sesuai kebutuhan */
        margin-right: 5px;
        /* Jarak antara ikon dan teks */
    }

    #search-container {
        display: flex;
        align-items: center;
        margin-right: auto;
        /* Memaksa elemen ini ke kiri */
    }

    .icon-button {
        display: flex;
        align-items: center;
        font-size: 30px;
        gap: 20px;
    }

    .edit-dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .edit-dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }

    /* Efek hover */
    .nav-pills li:hover {
        background-color: #EDAB2D;
        /* Ubah warna latar belakang sesuai keinginanmu */
        border-radius: 8px;
        /* Atur border radius sesuai keinginanmu */
    }

    /* Atur border radius pada elemen garis */
    .nav-pills .garis {
        border-radius: 8px;
        /* Atur border radius sesuai keinginanmu */
    }
</style>
@endsection
@section('content')
{{-- <h4 style="color: #1d2951; margin-left: 65px">Appointment</h4> --}}

@if (session('success'))
<div class="alert alert-success fw-bold">
    {{session('success')}}
</div>
@endif
@if (session('gagal'))
<div class="alert alert-danger fw-bold">
    {{session('gagal')}}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div id="actions" style="background-color: #243364; padding: 10px 15px" class="d-flex justify-content-between">
    <div class="main-header ">
        {{-- <h3 style="color: white">Queue</h3> --}}
        {{-- <div id="search-container">
            <input type="text" id="search-input" placeholder="Search..." />
        </div> --}}
    </div>
    <div class="add-button">
        <a class="btn btn-primary" href="/student-admin/create" role="button">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>
<table id="table" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Major</th>
            <th>Email</th>
            <th>Admission Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data mahasiswa akan ditampilkan di sini -->
        <?php $no=1;?>
        @isset($data)
        @foreach ($data as $value)
        <tr>
            <td style="text-align: center">{{$no++}}</td>
            <td>{{$value->nim}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->jurusan}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->tanggal}}</td>
            <td class="text-center justify-content-center d-flex gap-3">
                <a href="/student-admin/{{$value->id}}/edit" class="btn text-dark">
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
                <form action="/student-admin/{{$value->id}}" method="post">
                    @method('delete')
                    @csrf
                    {{csrf_field()}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    {{-- <button class="btn btn-danger delete-btn" id="delete" data-id="{{$value->id}}">
                        <i class="fa fa-trash">
                        </i>
                    </button> --}}
                    <button class="btn btn-danger btn-user" onclick="return confirm('Apakah kamu yakin?')"><i
                            class="fa fa-trash">
                        </i></button>
                </form>
            </td>
        </tr>
        @endforeach
        @endisset

        <!-- Tambahkan baris sesuai dengan jumlah mahasiswa -->
    </tbody>
</table>
@endsection