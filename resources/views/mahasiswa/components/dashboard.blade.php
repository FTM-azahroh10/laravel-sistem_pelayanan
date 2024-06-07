@extends('mahasiswa.layouts.main')
@section('content')
    <div class="row" style="padding-top: 10px">
        <div class="col-md-4">
            <div class="card"
                style="
          width: 280px;
          height: 130px;
          border-left: 8px solid #edab2d;
        ">
                <div class="row container pt-2">
                    <p>Member Status</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold mb-0">Active</h4>
                        <p class="card-text">
                            <small class="text-muted">Since 1 August 2022</small>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img_mhs/iconactive.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"
                style="
          width: 280px;
          height: 130px;
          border-left: 8px solid #edab2d;
        ">
                <div class="row container pt-2">
                    <p>Academic Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold mb-0">5</h4>
                        <p class="card-text">
                            <small class="text-muted">In progress</small>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img_mhs/menu1.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"
                style="
          width: 280px;
          height: 130px;
          border-left: 8px solid #edab2d;
        ">
                <div class="row container pt-2">
                    <p>Student Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold mb-0">7</h4>
                        <p class="card-text">
                            <small class="text-muted">Completed</small>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img_mhs/menu2.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card"
                style="
          width: 280px;
          height: 130px;
          border-left: 8px solid #edab2d;
        ">
                <div class="row container pt-2">
                    <p>Financial Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold mb-0">5</h4>
                        <p class="card-text">
                            <small class="text-muted">In progress</small>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img_mhs/menu3.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"
                style="
          width: 280px;
          height: 130px;
          border-left: 8px solid #edab2d;
        ">
                <div class="row container pt-2">
                    <p>General Service</p>
                </div>
                <div class="row container">
                    <div class="col-md-10">
                        <h4 class="fw-bold mb-0">3</h4>
                        <p class="card-text">
                            <small class="text-muted">Completed</small>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('assets/img_mhs/menu4.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card" style="width: 960px; height: 200px"></div>
        </div>
    </div>
@endsection
