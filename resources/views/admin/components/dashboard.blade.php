@extends('admin.layouts.main')
@section('style')
    <style>
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
    <div class="row" style="padding-top: 10px;">
        <div class="col-md-4">
            <div class="card" style="width: 300px;height: 130px;border-left: 8px solid #EDAB2D;">
                <div class="row container pt-2">
                    <p>Academic Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold">500</h4>
                        <div class="row ">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/iconuptrend.svg') }}" alt="">
                            </div>
                            <div class="col-md-10">
                                <p class="card-text"><small class="text-muted"><span style="color: #63C482;">30%</span>
                                        Since last
                                        semester</small></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img/menu1.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="width: 300px;height: 130px;border-left: 8px solid #EDAB2D;">
                <div class="row container pt-2">
                    <p>General Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold">100</h4>
                        <div class="row ">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/icondowntrend.svg') }}" alt="">
                            </div>
                            <div class="col-md-10">
                                <p class="card-text"><small class="text-muted"><span style="color: #E53935;">-15%</span>
                                        Since last
                                        semester</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img/menu4.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 300px;height: 130px;border-left: 8px solid #EDAB2D;">
                <div class="row container pt-2">
                    <p>Student Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold">250</h4>
                        <div class="row ">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/icondowntrend.svg') }}" alt="">
                            </div>
                            <div class="col-md-10">
                                <p class="card-text"><small class="text-muted"><span style="color: #E53935;">-5%</span>
                                        Since last
                                        semester</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img/menu2.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 300px;height: 130px;border-left: 8px solid #EDAB2D;">
                <div class="row container pt-2">
                    <p>Financial Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold">1,500</h4>
                        <div class="row ">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/iconuptrend.svg') }}" alt="">
                            </div>
                            <div class="col-md-10">
                                <p class="card-text"><small class="text-muted"><span style="color: #63C482;">10.5%</span>
                                        Since last
                                        semester</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img/menu3.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="grafik" style="margin-top: 40px;">
            <img src="{{ asset('assets/img/presentance.png') }}" alt="" style="margin-right: 40px;">
            <img src="{{ asset('assets/img/semester.png') }}" alt="">
        </div>
    </div>
@endsection
