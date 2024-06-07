<?php

// app/Http/Controllers/FileUploadController.php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\AcademicServices;
use App\Models\AdminStudents;
use Illuminate\Support\Facades\DB;

class FileUploadController extends Controller
{
    public function create()
    {
        return view('fileupload.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048', // adjust file types and size as needed
            'other_field' => 'required',
        ]);

        $code = $request->other_field . '-';
        $keperluan = null;

        switch ($request->other_field) {
            case 'RSG':
                $keperluan = 'Resignation';
                break;
            case 'ENR':
                $keperluan = 'Re-Enrolling';
                break;
            case 'TER':
                $keperluan = 'Terminal';
                break;
            case 'LEV':
                $keperluan = 'Leave';
                break;
            case 'REG':
                $keperluan = 'Registration of Judicium';
                break;

            default:
                # code...
                break;
        }

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
        $code .= Str::random(28);
        $user = AdminStudents::where('email', auth()->user()->email)->get()->first();
        $data = [
            'nim' => $user->nim,
            'nama' => $user->nama,
            'jurusan' => $user->jurusan,
            'tanggal' => date('Y-m-d'),
            'email' => $user->email,
            'status' => 'NOT STARTED',
            'keperluan' => $keperluan,
            'dokumen' => $path,
            'code' => $code
        ];

        DB::transaction(function () use ($data, $path, $request){
            FileUpload::create([
                'file_path' => $path,
                'other_field' => $request->other_field,
            ]);
            AcademicServices::create($data);
        });

        return redirect()->to('/academicService')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
}
