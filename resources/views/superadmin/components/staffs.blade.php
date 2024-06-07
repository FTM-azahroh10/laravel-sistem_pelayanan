@extends('superadmin.layouts.main')
@section('style')
    <style>
        h2 {
            text-align: center;
        }

        #actions {
            width: 90%;
            margin: auto;
            margin-bottom: 0;
            /* Ubah margin-bottom menjadi 0 */
            border-collapse: collapse;
            margin-top: 20px;
            display: flex;
            background-color: #243364;
            padding: 10px 15px;
            justify-content: space-between;
        }

        #student-list {
            width: 90%;
            margin: auto;
            margin-top: 0;
            /* Ubah margin-top menjadi 0 */
            border-collapse: collapse;
        }

        .main-header {
            display: flex;
            align-items: center;
        }

        .main-header h3 {
            color: white;
            margin-right: 20px;
            /* Jarak antara h3 dan input */
        }

        #student-list th,
        #student-list td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            background-color: #fff;
            /* Latar belakang putih */
        }

        #student-list th {
            background-color: #f2f2f2;
        }

        #student-list tr:hover {
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
    <div id="actions" style="background-color: #243364; padding: 10px 15px">
        <div class="main-header">
            <h3 style="color: white">Staffs</h3>
            <div id="search-container">
                <input type="text" id="search-input" placeholder="Search..." />
            </div>
        </div>
        <div class="icon-button">
            <i class="ri-add-circle-fill" style="color: white"></i>
            <i class="ri-refresh-line" style="color: white"></i>
            <i class="ri-delete-bin-5-fill" style="color: rgb(180, 26, 26)"></i>
        </div>
    </div>
    <table id="student-list">
        <thead>
            <tr>
                <th><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></th>
                <th>No</th>
                <th>NIP</th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data mahasiswa akan ditampilkan di sini -->
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>1</td>
                <td>01234501</td>
                <td>Sukiman</td>
                <td>Front Office</td>
                <td>sukiman@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>2</td>
                <td>01234502</td>
                <td>Aprilia Lailatul Chasanah</td>
                <td>Academic Service</td>
                <td>aprilia@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>3</td>
                <td>01234503</td>
                <td>Hilya Nadiha Maula El Hakeem</td>
                <td>Student Service</td>
                <td>hilya@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>4</td>
                <td>01234504</td>
                <td>Raddhin Karima Fahdi</td>
                <td>Financial Service</td>
                <td>raddhin@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>5</td>
                <td>01234505</td>
                <td>Sultoni Arif</td>
                <td>Security</td>
                <td>sultoni@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>6</td>
                <td>01234506</td>
                <td>Hadi Nugraha</td>
                <td>General Service</td>
                <td>suryono@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>7</td>
                <td>01234507</td>
                <td>Tasya Nabila Dwiyanto</td>
                <td>Chief Secretary</td>
                <td>tasya@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>8</td>
                <td>01234508</td>
                <td>Haryanto</td>
                <td>Class Service</td>
                <td>haryanto@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>9</td>
                <td>01234509</td>
                <td>Dani Hendra Prasetyo</td>
                <td>Security</td>
                <td>dani@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>10</td>
                <td>012345010</td>
                <td>Achmad Hariyono</td>
                <td>Driver</td>
                <td>achmad@staff.ub.ac.id</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="pagination" style="margin-top: 20px; display: flex; justify-content: center">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
@endsection
