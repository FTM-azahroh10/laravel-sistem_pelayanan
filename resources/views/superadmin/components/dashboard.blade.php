@extends('superadmin.layouts.main')
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
            <div class="card"
                style="width: 520px; height: 270px; border-radius: 20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
                <div class="row container">
                    <div class="col-md-10" style="margin-left: 10px;">
                        <div style="display: flex; margin-top: 20px;">
                            <img src="{{ asset('assets/img_spradm/total-user.png') }}" alt="" style="width: 80px;">
                            <h4 class="fw-bold" style="margin-top: 20px; margin-left: 20px;">Total
                                Users</h4>
                        </div>
                        <h1 style="font-weight: bold; margin-top: 20px;">2350</h1>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img_spradm/iconuptrend.svg') }}" alt="">
                            </div>
                            <div class="col-md-10">
                                <p class="card-text"><small class="text-muted"><span style="color: #63C482;">30%</span>
                                        Since last
                                        semester</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"
                style="width: 588px; height: 270px; border-radius: 20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2); margin-left: 120px;">
                <div class="row container">
                    <div class="col-md-10" style="margin-left: 10px;">
                        <div style="display: flex; margin-top: 20px;">
                            <img src="{{ asset('assets/img_spradm/top.png') }}" alt="" style="width: 50px;">
                            <h4 class="fw-bold" style="margin-top: 20px; margin-left: 20px;">Total
                                Services</h4>
                        </div><br>
                        <div style="display: flex; gap:150px;">
                            <div style="display: flex;">
                                <img src="{{ asset('assets/img_spradm/fc.png') }}" alt="">
                                <div class="col-md-auto" style="margin-left: 40px; font-weight: bold;">
                                    <p class="card-text">Financial Services</p>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <img src="{{ asset('assets/img_spradm/gc.png') }}" alt="">
                                <div class="col-md-auto" style="margin-left: 40px; font-weight: bold;">
                                    <p class="card-text">Financial Services</p>
                                </div>
                            </div>
                        </div><br>
                        <div style="display: flex; gap:150px;">
                            <div style="display: flex;">
                                <img src="{{ asset('assets/img_spradm/sc.png') }}" alt="">
                                <div class="col-md-auto" style="margin-left: 40px; font-weight: bold;">
                                    <p class="card-text">Financial Services</p>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <img src="{{ asset('assets/img_spradm/ac.png') }}" alt="">
                                <div class="col-md-auto" style="margin-left: 40px; font-weight: bold;">
                                    <p class="card-text">Financial Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grafik" style="margin-top: 40px;">
        <img src="{{ asset('assets/img_spradm/presentance.png') }}" alt="" style="margin-right: 40px;">
        <img src="{{ asset('assets/img_spradm/semester.png') }}" alt="">
    </div>
@endsection
