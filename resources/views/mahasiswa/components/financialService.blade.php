@extends('mahasiswa.layouts.main')
@section('content')
    <h2 class="pt-2 mb-4 fw-bold" style="color: #1d2951">Student Service</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/ukt" style="text-decoration: none">
                    <div class="card pt-3 align-items-center" style="background-color: #1d2951">
                        <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="" />
                        <p class="pt-2" style="color: #edab2d">
                            UKT AID Aplication
                            <br /><br />
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/funds" style="text-decoration: none">
                    <div class="card pt-3 align-items-center" style="background-color: #1d2951">
                        <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="" />
                        <p class="pt-2 text-center" style="color: #edab2d">Submission of Funds for Student Affairs
                            Activities</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
