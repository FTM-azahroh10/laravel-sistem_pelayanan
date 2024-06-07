@extends('admin.layouts.main')
@section('setyle')
    <style>
        body {
            width: 100%;
            height: 100%;
        }

        h2 {
            text-align: center;
        }

        #student-list {
            width: 94%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
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

        #actions {
            width: 94%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            display: flex;
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
            height: 40px;
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
    <div>
        <h2 style="text-align: left; margin-bottom: 18px">Appointment</h2>
        <div
            style="border: 1px solid #ccc; border-radius: 10px; background-color: #01a65a; padding-top: 12px; padding-left: 36px; color: white; width: 140px; height: 56px">
            <p>Add New</p>
        </div>
    </div>
    <div class="container-1"
        style="border: 1px solid #ccc; border-radius: 10px; background-color: #f0f0f0; padding-bottom: 30px; margin-top: 30px">
        <div id="actions">
            <div id="search-container">
                <input type="text" id="search-input" placeholder="Search..." />
            </div>
            <div class="icon-button">
                <i class="ri-delete-bin-5-fill" style="color: rgb(186, 17, 17)"></i>
            </div>
        </div>
        <table id="student-list">
            <thead>
                <tr>
                    <th><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></th>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Services</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data mahasiswa akan ditampilkan di sini -->
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>1</td>
                    <td>Muhammad Kevin Jati Samudro</td>
                    <td>kevin@student.ub.ac.id</td>
                    <td>Academic</td>
                    <td>08.45 AM</td>
                    <td>09.00 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>2</td>
                    <td>Fatimah Azahroh</td>
                    <td>fatimah@student.ub.ac.id</td>
                    <td>Financial</td>
                    <td>09.00 AM</td>
                    <td>09.15 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>3</td>
                    <td>Rizma Safrilia Nuraini</td>
                    <td>rizma@student.ub.ac.id</td>
                    <td>General</td>
                    <td>09.15 AM</td>
                    <td>09.30 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>4</td>
                    <td>Salsabila Istiningrum S</td>
                    <td>salsabila@student.ub.ac.id</td>
                    <td>Student</td>
                    <td>09.30 AM</td>
                    <td>09.45 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>5</td>
                    <td>Chantalaurel Lexia</td>
                    <td>chantalaurel@student.ub.ac.id</td>
                    <td>Academic</td>
                    <td>09.45 AM</td>
                    <td>10.00 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>6</td>
                    <td>Muamar Husein Al Zumal</td>
                    <td>muamar@student.ub.ac.id</td>
                    <td>Financial</td>
                    <td>10.00 AM</td>
                    <td>10.15 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>7</td>
                    <td>Tiara Sabilillah</td>
                    <td>tiara@student.ub.ac.id</td>
                    <td>General</td>
                    <td>10.15 AM</td>
                    <td>10.30 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>8</td>
                    <td>Kesya Putri Awalea</td>
                    <td>kesya@student.ub.ac.id</td>
                    <td>Student</td>
                    <td>10.30 AM</td>
                    <td>10.45 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                    <td>9</td>
                    <td>Muhammad Faza Dias Hijran</td>
                    <td>faza@student.ub.ac.id</td>
                    <td>Academic</td>
                    <td>10.45 AM</td>
                    <td>11.00 AM</td>
                    <td style="text-align: center">
                        <i class="ri-edit-box-line"></i>
                    </td>
                </tr>
                <!-- Tambahkan baris sesuai dengan jumlah mahasiswa -->
            </tbody>
        </table>
    </div>
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
