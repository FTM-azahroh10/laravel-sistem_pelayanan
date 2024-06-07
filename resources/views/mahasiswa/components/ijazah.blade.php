@extends('mahasiswa.layouts.main')
@section('style')
    <style>
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            /* Adjust as needed */
        }

        .border-box {
            border: 2px solid #1d2951;
            border-radius: 10px;
            padding: 20px;
            /* Adjust as needed */
            background-color: #edab2d;
            /* Adjust the background color and opacity as needed */
        }
    </style>
@endsection
@section('content')
    <h2 class="pt-4 mb-4 fw-bold" style="color: #1d2951">Academic Service</h2>
    <div class="centered-container">
        <div class="border-box">
            <div class="container">
                <p style="text-align: center; font-weight: bold; font-size: 35px; color: #1d2951">Ijazah</p>
                <div class="row">
                    <div class="col-md-12" id="iconmenu">
                        <div class="row">
                            <div class="col-md-5 d-flex">
                                <div class="card d-flex align-items-center ms-4 text-center"
                                    style="width: 450px; height: 320px; border-radius: 15px">
                                    <h2 class="pt-4">Message</h2>
                                    <br />
                                    <p style="font-size: 18px"></p>
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto" style="padding-top: 60px">
                                <!-- Added mx-auto class for centering -->
                                <a href="/ijazahDownload" class="card align-items-center text-center">
                                    <div class="row pt-4">
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/img_mhs/icondownload.png') }}" alt="" />
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <h5 class="fw-bold" style="color: #1d2951">Download</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
