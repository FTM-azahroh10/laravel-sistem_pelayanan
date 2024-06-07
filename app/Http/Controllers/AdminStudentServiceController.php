<?php

namespace App\Http\Controllers;

use App\Models\AdminStudentService;
use Illuminate\Http\Request;

class AdminStudentServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentService = AdminStudentService::all();
        if ($studentService) {
            $data = $studentService;
        }
        return response()->view('admin.components.studentServices.studentService', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminStudentService  $adminStudentService
     * @return \Illuminate\Http\Response
     */
    public function show(AdminStudentService $adminStudentService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminStudentService  $adminStudentService
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminStudentService $adminStudentService, $id)
    {
        $data = AdminStudentService::find($id);
        return response()->view('admin.components.studentServices.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminStudentService  $adminStudentService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminStudentService $adminStudentService, $id)
    {
        $data = AdminStudentService::find($id);
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'tanggal' => 'required',
            'email' => 'required',
            'status' => 'required',
            'keperluan' => 'required'
        ]);

        if ($validatedData['status'] == null || $validatedData['keperluan'] == null) {
            $validatedData['status'] = $data->status;
            $validatedData['keperluan'] = $data->keperluan;
        }

        // dd($validatedData);
        date_default_timezone_set('Asia/Jakarta');

        // $validatedData['updated_at'] = date('Y-m-d G:i:s');
        AdminStudentService::where('id', $id)
            ->update($validatedData);

        return redirect('/student-services')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminStudentService  $adminStudentService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminStudentService $adminStudentService,$id)
    {
        AdminStudentService::destroy($id);
        return redirect('/student-services')->with('success', 'data berhasil dihapus!');
    }
}
