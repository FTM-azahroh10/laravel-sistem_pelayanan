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
    <h2 class="pt-4 mb-4 fw-bold" style="color: #1d2951">Student General</h2>
    <div class="col-md-10 mx-auto">
        <div class="card d-flex" style="background-color: #1d2951; height: 300px">
            <div class="mx-auto pt-4">
                <div class="col-md-12 justify-content-center">
                    <label class="mb-2" for="" style="color: white; font-size: 20px">Requirements</label>
                    <input class="form-control text-center" style="width: 800px" type="text" name=""
                        id="" />
                </div>
                <div class="col-md-12 justify-content-center">
                    <div class="custom-file" style="width: 800px">
                        <label for="formFile" class="form-label pt-4"
                            style="color: white; font-size: 20px">XXXXXXXXXX</label>
                        <input class="form-control" type="file" id="formFile" />
                    </div>
                </div>
                <div class="card mx-auto mt-4 justify-content-center align-items-center"
                    style="width: 150px; height: 40px; background-color: #edab2d">
                    <h5 style="color: white"><i>Upload</i></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
