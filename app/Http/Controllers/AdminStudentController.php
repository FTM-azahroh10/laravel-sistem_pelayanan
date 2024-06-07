<?php

namespace App\Http\Controllers;

use App\Models\AdminStudents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = AdminStudents::all();
        if ($student) {
            $data = $student;
        }
        return response()->view('admin.components.students.students', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.components.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'tanggal' => 'required',
            'password' => 'required',
        ]);

        $data_akun_mahasiswa = [
            'name' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'jabatan' => null,
            'role' => 'mahasiswa',
        ];

        $data = [
            $validatedData,
            $data_akun_mahasiswa
        ];

        DB::transaction(function () use ($data){
            AdminStudents::create($data[0]);
            User::create($data[1]);
        });
        
        return redirect('/student-admin')->with('success', 'data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminStudents  $adminStudent
     * @return \Illuminate\Http\Response
     */
    public function show(AdminStudents $adminStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminStudents  $adminStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminStudents $adminStudent, $id)
    {

        $data = AdminStudents::find($id);
        return response()->view('admin.components.students.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminStudents  $adminStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminStudents $adminStudent,$id)
    {
        // $data = AdminStudents::find($id);
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'tanggal' => 'required',
        ]);
        AdminStudents::where('id', $id)
            ->update($validatedData);
        return redirect('/student-admin')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminStudents  $adminStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminStudents $adminStudent,$id)
    {
        AdminStudents::destroy($id);
        return redirect('/student-admin')->with('success', 'data berhasil dihapus!');
    }
}
