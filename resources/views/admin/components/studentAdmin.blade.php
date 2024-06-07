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
        <div id="search-container">
            <input type="text" id="search-input" placeholder="Search..." />
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
                <th>ID Student</th>
                <th>Name</th>
                <th>Major</th>
                <th>Email</th>
                <th>Admission Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data mahasiswa akan ditampilkan di sini -->
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>1</td>
                <td>223140707111032</td>
                <td>Muhammad Kevin Jati Samudro</td>
                <td>Information Technology</td>
                <td>kevin@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>2</td>
                <td>223140714111012</td>
                <td>Fatimah Azahroh</td>
                <td>Information System</td>
                <td>fatimah@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>3</td>
                <td>223140707111034</td>
                <td>Rizma Safrilia Nuraini</td>
                <td>Information System</td>
                <td>rizma@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>4</td>
                <td>223140714111009</td>
                <td>Salsabila Istiningrum S</td>
                <td>Information System</td>
                <td>salsabila@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>5</td>
                <td>223140714111086</td>
                <td>Chantalaurel Lexia</td>
                <td>Information System</td>
                <td>chantalaurel@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>6</td>
                <td>213140707111065</td>
                <td>Muamar Husein Al Zumal</td>
                <td>Information System</td>
                <td>muamar@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>7</td>
                <td>223140714111130</td>
                <td>Tiara Sabilillah</td>
                <td>Information Technology</td>
                <td>tiara@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>8</td>
                <td>223140714111241</td>
                <td>Kesya Putri Awalea</td>
                <td>Information Technology</td>
                <td>kesya@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="studentCheckbox" id="studentCheckbox1" /></td>
                <td>9</td>
                <td>223140714111031</td>
                <td>Muhammad Faza Dias Hijran</td>
                <td>Information Technology</td>
                <td>faza@student.ub.ac.id</td>
                <td>22/08/2022</td>
                <td style="text-align: center">
                    <i class="ri-edit-box-line"></i>
                </td>
            </tr>
            <!-- Tambahkan baris sesuai dengan jumlah mahasiswa -->
        </tbody>
    </table>
@endsection
