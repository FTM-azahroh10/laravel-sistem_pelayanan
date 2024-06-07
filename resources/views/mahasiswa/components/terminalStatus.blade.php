@extends('mahasiswa.layouts.main')
@section('content')
    <h2 class="pt-4 mb-4 fw-bold" style="color: #1d2951">Academic Service</h2>
    <div class="card" style="background-color: #edab2d; height: 420px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="pt-2 mb-4">Terminal Submission</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <h3 class="pt-2 mb-4">STATUS</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 d-flex">
                    <div class="card d-flex ms-4 pt-2" style="width: 580px; height: 320px; border-radius: 15px">
                        <h2 style="text-align: center; padding-top: 25px">Tracking Your Services</h2>
                        <div class="mx-auto" style="width: 400px; padding-top: 50px">
                            <input class="form-control text-center" style="border-color: #1d2951; border-width: 3px"
                                type="text" name="" id="" placeholder="Please enter your code" />
                        </div>
                        <button class="card mx-auto mt-4 justify-content-center align-items-center"
                            style="width: 150px; height: 40px; background-color: #d5d5d5" >Check Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
