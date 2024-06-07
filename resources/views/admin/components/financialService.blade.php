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

        .main-header {
            display: flex;
            align-items: center;
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

        #student-list {
            width: 90%;
            margin: auto;
            margin-top: 0;
            /* Ubah margin-top menjadi 0 */
            border-collapse: collapse;
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
    <h4 style="color: #1d2951; margin-left: 65px">Services > <span style="color: orange">Financial Services</span></h4>
    <div id="actions" style="background-color: #243364; padding: 10px 15px">
        <div class="main-header">
            <h3 style="color: white">Queue</h3>
            <div id="search-container">
                <input type="text" id="search-input" placeholder="Search..." />
            </div>
        </div>
        <div class="icon-button">
            <i class="ri-refresh-line" style="color: white"></i>
        </div>
    </div>
    <table id="student-list">
        <thead>
            <tr>
                <th><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></th>
                <th>Guest No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Major</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data mahasiswa akan ditampilkan di sini -->
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">1</td>
                <td>223140707111032</td>
                <td>Muhammad Kevin Jati Samudro</td>
                <td>Information Technology</td>
                <td>01/10/2023</td>
                <td style="font-weight: bold; color: red">Not Started</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: red">In Progress</a>
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">2</td>
                <td>223140714111012</td>
                <td>Fatimah Azahroh</td>
                <td>Information System</td>
                <td>02/10/2023</td>
                <td style="font-weight: bold; color: orange">In Progress</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">3</td>
                <td>223140707111034</td>
                <td>Rizma Safrilia Nuraini</td>
                <td>Information System</td>
                <td>03/10/2023</td>
                <td style="font-weight: bold; color: green">Completed</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">4</td>
                <td>223140714111009</td>
                <td>Salsabila Istiningrum S</td>
                <td>Information System</td>
                <td>04/10/2023</td>
                <td style="font-weight: bold; color: red">Not Started</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: red">In Progress</a>
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">5</td>
                <td>223140714111086</td>
                <td>Chantalaurel Lexia</td>
                <td>Information System</td>
                <td>05/10/2023</td>
                <td style="font-weight: bold; color: orange">In Progress</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">6</td>
                <td>213140707111065</td>
                <td>Muamar Husein Al Zumal</td>
                <td>Information System</td>
                <td>06/10/2023</td>
                <td style="font-weight: bold; color: green">Completed</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">7</td>
                <td>223140714111130</td>
                <td>Tiara Sabilillah</td>
                <td>Information Technology</td>
                <td>07/10/2023</td>
                <td style="font-weight: bold; color: red">Not Started</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: red">In Progress</a>
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">8</td>
                <td>223140714111241</td>
                <td>Kesya Putri Awalea</td>
                <td>Information Technology</td>
                <td>08/10/2023</td>
                <td style="font-weight: bold; color: orange">In Progress</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#" style="color: green">Completed</a>
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td style="text-align: center">9</td>
                <td>223140714111031</td>
                <td>Muhammad Faza Dias Hijran</td>
                <td>Information Technology</td>
                <td>09/10/2023</td>
                <td style="font-weight: bold; color: green">Completed</td>
                <td style="text-align: center" class="edit-dropdown">
                    <i class="ri-edit-box-line"></i>
                    <div class="dropdown-content">
                        <a href="#">Upload Files</a>
                    </div>
                </td>
            </tr>
            <!-- Tambahkan baris sesuai dengan jumlah mahasiswa -->
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
