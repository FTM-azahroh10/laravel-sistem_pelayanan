@extends('mahasiswa.layouts.main')
@section('content')
    <h2 class="pt-4 mb-4 fw-bold" style="color: #1d2951">Academic Service</h2>
    <div class="card" style="background-color: #edab2d; height: 600px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="pt-2 mb-4">Ijazah</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <h3 class="pt-2 mb-4">Download</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 d-flex">
                    <div class="card d-flex ms-4 pt-2" style="width: 580px; height: 460px; border-radius: 15px">
                        <p style="height: 350px"></p>
                        <button class="card mx-auto mt-4 justify-content-center align-items-center"
                            style="width: 200px; height: 40px; background-color: #d5d5d5" >Download Document</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
