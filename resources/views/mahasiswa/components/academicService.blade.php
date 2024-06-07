@extends('mahasiswa.layouts.main')
@section('content')
<h2 class="pt-2 mb-4 fw-bold" style="color: #1D2951">Academic Service</h2>
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
<div class="row">
    <div class="col-md-3">
        <a href="/enrolling" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Re-Enrolling Students</p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/leave" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Leave Application</p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/terminal" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Terminal Submission</p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/submission" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Submission Of Resignation</p>
            </div>
        </a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-3">
        <a href="/registration" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Registration Of Judicium</p>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/ijazah" style="text-decoration: none;">
            <div class="card pt-3 align-items-center" style="background-color: #1D2951;">
                <img class="img-fluid" src="{{ asset('assets/img_mhs/shape-1.png') }}" width="150" alt="">
                <p class="pt-2" style="color: #EDAB2D;">Ijazah</p>
            </div>
        </a>
    </div>
</div>
@endsection
