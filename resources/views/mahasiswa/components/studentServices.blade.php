@extends('mahasiswa.layouts.main')
@section('content')
    <h2 class="pt-2 mb-4 fw-bold" style="color: #1d2951">Student Service</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/sexualBullying" style="text-decoration: none">
                    <div class="card pt-3 align-items-center" style="background-color: #1d2951">
                        <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="" />
                        <p class="pt-2" style="color: #edab2d">Sexual Assault & Bullying</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/activities" style="text-decoration: none">
                    <div class="card pt-3 align-items-center" style="background-color: #1d2951">
                        <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="" />
                        <p class="pt-2" style="color: #edab2d">Submission of Student Activities</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/scholarship" style="text-decoration: none">
                    <div class="card pt-3 align-items-center" style="background-color: #1d2951">
                        <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="" />
                        <p class="pt-2" style="color: #edab2d">Scholarship Application</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
