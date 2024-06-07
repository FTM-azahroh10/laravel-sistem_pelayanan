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
                    <h3 class="pt-2 mb-4">Appointment</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 d-flex">
                    <div class="card d-flex align-items-center ms-4 text-center"
                        style="width: 400px; height: 320px; border-radius: 15px">
                        <h2 class="pt-4">Message</h2>
                        <br />
                        <p style="font-size: 18px">Appointment are limited to 50 people per day. Please come as scheduled,
                            and be polite to our staff.</p>
                    </div>
                </div>
                <div class="col-md-7 d-flex">
                    <div class="card d-flex ms-4 pt-2" style="width: 580px; height: 320px; border-radius: 15px">
                        <form action="/terminalQueue" method="post">
                            @csrf
                            <div class="container row d-flex text-center mt-4">
                                <h3>Make Your Appointment</h3>
                            </div>
                            <div class="container row d-flex justify-content-center pt-4">
                                <div class="form-date" style="width: 500px">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="date" name="appointment_date" />
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/img_mhs/iconqueuetgl.svg') }}" height="35px"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container row d-flex justify-content-center pt-4">
                                <div class="form-text" style="width: 500px">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input class="form-control" type="time" id="time" name="appointment_time" />
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/img_mhs/iconqueuejam.svg') }}" height="35px"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="card mx-auto mt-4 justify-content-center align-items-center"
                                style="width: 150px; height: 40px; background-color: #d5d5d5">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
