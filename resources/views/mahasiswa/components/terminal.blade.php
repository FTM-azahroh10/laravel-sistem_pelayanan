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
        background: rgba(111, 110, 120, 0.5);
        /* Adjust the background color and opacity as needed */
    }
</style>
@endsection
@section('content')
<h2 class="pt-4 mb-4 fw-bold" style="color: #1d2951">Academic Service</h2>
@if (session('success'))
<div class="alert alert-success fw-bold">
    {{session('success')}}
</div>
@endif
@if (session('gagal'))
<div class="alert alert-danger fw-bold">
    {{session('gagal')}}
</div>
@endif
<div class="centered-container">
    <div class="border-box">
        <div class="container">
            <p style="text-align: center; font-weight: bold; font-size: 35px; color: #1d2951">Terminal Submission</p>
            <div class="row">
                <!-- Upload Section -->
                <div class="col-md-12" id="iconmenu">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/terminalUpload" class="card align-items-center text-center">
                                <div class="row pt-4">
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img_mhs/iconupload.png') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <h5 class="fw-bold" style="color: #1d2951">UPLOAD</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Queue Section -->
                        <div class="col-md-6">
                            <a href="/terminalStatus" class="card align-items-center text-center">
                                <div class="row pt-4">
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img_mhs/iconstatus.png') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <h5 class="fw-bold" style="color: #1d2951">STATUS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Status Section -->
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex align-items-center">
                            <a href="/terminalQueue" class="card align-items-center text-center mx-auto"
                                style="width: 350px">
                                <div class="row pt-4">
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img_mhs/iconqueue.png') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <h5 class="fw-bold" style="color: #1d2951">APPOINTMENT</h5>
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
