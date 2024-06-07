@extends('admin.layouts.main')
@section('style')
    <style>
        .border-box {
            width: 300px;
            /* Sesuaikan lebar sesuai kebutuhan */
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            /* margin: 0 auto; */
            /* Untuk membuatnya berada di tengah halaman */
            background: linear-gradient(to bottom, #112056, #23387f, #7c8ec5, #ffffff);
            /* 3 Warna Gradient */
        }

        /* CSS untuk gambar */
        .border-box img {
            max-width: 100%;
            /* Agar gambar tidak melebihi lebar box */
            height: auto;
        }

        .container-box {
            display: flex;
            /* justify-content: space-around; */
            /* Untuk memberikan ruang di sekitar elemen secara merata */
            /* gap: 5px; */
            /* Untuk memberikan jarak antara kotak */
        }

        .container-box-1 {
            margin-right: 977px;
        }

        .read-more {
            border-radius: 7px;
            height: 30px;
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
    <div class="container-box" style="padding-top: 10px">
        <div class="row justify-content-start gap-3" style="margin:0px">
            <div class="border-box col-4">
                <h2 style="color: white">Sukiman</h2>
                <p style="color: white; font-size: 30px">Front Office</p>
                <img src="{{ asset('assets/img/Sukiman.png') }}" alt="Gambar" />
                <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000</p>
                <div class="read-more"
                    style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                    <p style="color: white; margin: 0">Read More</p>
                </div>
            </div>
            <div class="border-box col-4">
                <h2 style="color: white">Aprilia Lailatul</h2>
                <p style="color: white; font-size: 30px">Academic Service</p>
                <img src="{{ asset('assets/img/aprillia.png') }}" alt="Gambar" />
                <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000
                </p>
                <div class="read-more"
                    style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                    <p style="color: white; margin: 0">Read More</p>
                </div>
            </div>
            <div class="border-box col-4">
                <h2 style="color: white">Amalia Adhitya</h2>
                <p style="color: white; font-size: 30px">Student Service</p>
                <img src="{{ asset('assets/img/amalia.png') }}" alt="Gambar" />
                <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000
                </p>
                <div class="read-more"
                    style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                    <p style="color: white; margin: 0">Read More</p>
                </div>
            </div>
            <div class="border-box col-4">
                <h2 style="color: white">Raddhin Karima</h2>
                <p style="color: white; font-size: 30px">Financial Service</p>
                <img src="{{ asset('assets/img/raddhin.png') }}" alt="Gambar" />
                <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000
                </p>
                <div class="read-more"
                    style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                    <p style="color: white; margin: 0">Read More</p>
                </div>
            </div>
            <div class="border-box col-4">
                <h2 style="color: white">Sultoni Arif</h2>
                <p style="color: white; font-size: 30px">Student Service</p>
                <img src="{{ asset('assets/img/sultoni.png') }}" alt="Gambar" />
                <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000
                </p>
                <div class="read-more"
                    style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                    <p style="color: white; margin: 0">Read More</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-box-1">
        {{-- <div class="border-box">
            <h2 style="color: white">Sultoni Arif</h2>
            <p style="color: white; font-size: 30px">Student Service</p>
            <img src="{{ asset('assets/img/sultoni.png') }}" alt="Gambar" />
            <p style="color: rgb(0, 0, 0); font-size: 20px; margin-top: 10px"><i class="ri-phone-fill"></i> 0000-0000-0000
            </p>
            <div class="read-more"
                style="background-color: rgb(255, 170, 0); width: 100px; text-align: center; margin: auto">
                <p style="color: white; margin: 0">Read More</p>
            </div>
        </div> --}}
    </div>
@endsection
