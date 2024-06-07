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
                    <h3 class="pt-2 mb-4">UPLOAD</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 d-flex">
                    <div class="card d-flex align-items-center ms-4 text-center"
                        style="width: 400px; height: 320px; border-radius: 15px">
                        <h5 class="pt-4">Standar Operasional<br />Prosedur (SOP)</h5>
                        <br />
                        <p style="font-size: 20px">Surat Permohonan Penghentian Studi Sementara</p>
                    </div>
                </div>
                <div class="col-md-7 d-flex">
                    <div class="card d-flex ms-4 pt-2" style="width: 580px; height: 320px; border-radius: 15px">
                        <div class="container row d-flex justify-content-center">
                            <div class="custom-file" style="width: 500px; text-align: center; padding-top: 50px">
                                <label for="formFile" class="form-label fw-bold" style="margin-bottom: 40px">
                                    <h3>Upload Document</h3>
                                </label>
                                <form action="{{ route('fileupload.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input class="" type="hidden" id="formFile" name="other_field" value="TER"/>
                                    <input class="form-control" type="file" id="formFile" type="file" name="file" />
                                    <button class="card mx-auto mt-4 justify-content-center align-items-center"
                            style="width: 150px; height: 40px; background-color: #d5d5d5" >Upload Document</button>
                                </form>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
