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
<h4 style="color: #1d2951; margin-left: 65px">Student Information ></h4>
<div id="actions" style="background-color: #243364; padding: 10px 15px" class="d-flex justify-content-between">
    <div class="main-header ">
        <h3 style="color: white">Create Student Data</h3>
    </div>
</div>

<div class="container bg-white p-4">
    <form action="/student-admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" value="{{old('nim')}}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan"
                value="{{old('jurusan')}}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal"
                value="{{old('tanggal')}}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                value="{{old('password')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
