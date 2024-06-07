@extends('superadmin.layouts.main')
@section('style')
<style>
    h2 {
        text-align: center;
    }

    #actions {
        width: 100%;
        margin: auto;
        margin-bottom: 0;
        /* Ubah margin-bottom menjadi 0 */
        border-collapse: collapse;
        margin-top: 20px;
        display: flex;
        background-color: #243364;
        padding: 10px 15px;
    }

    .student-list {
        width: 100%;
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

    #search-input {
        height: 36px;
        padding: 8px;
        margin-right: 5px;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .icon-button {
        display: flex;
        align-items: center;
        font-size: 30px;
        gap: 20px;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    /* Efek hover */
    .nav-pills li:hover {
        background-color: #edab2d;
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
<div id="actions" style="background-color: #243364; padding: 10px 15px; margin-bottom: 15px">
    <h3 style="color: white">Summary Report</h3>
    {{-- <div id="search-container" style="margin-left: 710px">
        <input type="text" id="search-input" placeholder="Search..." />
    </div> --}}
</div>
<table id="table" class="student-list">
    <thead>
        <tr>
            <th>Tahun</th>
            <th>Academic Service Users</th>
            <th>Student Service Users</th>
            <th>Financial Service Users</th>
            <th>General Service Users</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data mahasiswa akan ditampilkan di sini -->
        @isset($data)
        <tr>
            <td>{{$data['year']}}</td>
            <td>{{$data['academic']}}</td>
            <td>{{$data['student']}}</td>
            <td>{{$data['financial']}}</td>
            <td>{{$data['general']}}</td>
        </tr>
        @endisset
    </tbody>
</table>

@endsection