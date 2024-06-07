@extends('admin.layouts.main')
@section('style')
    <style>
        .border-box {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .border-box img {
            max-width: 100%;
            border-radius: 10px;
        }

        .border-box p {
            text-align: center;
            color: black;
            font-weight: bold;
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
    <div class="container" style="display: flex; flex-direction: column; align-items: center; margin-top: 200px; gap: 4rem">
        <div class="row-1" style="display: flex; gap: 4rem; margin-bottom: 20px">
            <a href="/academic-services" style="text-decoration: none">
                <div class="border-box"
                    style="display: flex; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; width: 380px; height: 180px">
                    <img src="{{ asset('assets/img/acm.png') }}" alt="Gambar" />
                    <p
                        style="padding-top: 30px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        Academic Services Management</p>
                </div>
            </a>
            <a href="/student-services" style="text-decoration: none">
                <div class="border-box"
                    style="display: flex; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; width: 380px; height: 180px">
                    <img src="{{ asset('assets/img/scm.png') }}" alt="Gambar" />
                    <p
                        style="padding-top: 30px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        Student Service Management</p>
                </div>
            </a>
        </div>

        <div class="row-2" style="display: flex; gap: 4rem">
            <a href="/financial-services" style="text-decoration: none">
                <div class="border-box"
                    style="display: flex; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; width: 380px; height: 180px">
                    <img src="{{ asset('assets/img/fcm.png') }}" alt="Gambar" />
                    <p
                        style="padding-top: 30px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        Financial Services Management</p>
                </div>
            </a>
            <a href="/general-services" style="text-decoration: none">
                <div class="border-box"
                    style="display: flex; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; width: 380px; height: 180px">
                    <img src="{{ asset('assets/img/gcm.png') }}" alt="Gambar" />
                    <p
                        style="padding-top: 30px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        General Service Management</p>
                </div>
            </a>
        </div>
    </div>
@endsection
