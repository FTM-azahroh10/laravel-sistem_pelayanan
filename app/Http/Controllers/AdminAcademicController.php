<?php

namespace App\Http\Controllers;

use App\Models\AcademicServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicServices = AcademicServices::all();
        if ($academicServices) {
            $data = $academicServices;
        }
        return response()->view('admin.components.academicService.academicServices', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return response()->view('admin.components.academicService.create');
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
     * @param  \App\Models\AcademicServices  $academicService
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicServices $academicService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicServices  $academicService
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicServices $academicService)
    {
        // dd($academicService);
        $data = $academicService;
        return response()->view('admin.components.academicService.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicServices  $academicService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicServices $academicService)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'tanggal' => 'required',
            'email'=> 'required',
            'status' => 'required',
            'keperluan' => 'required'
        ]);

        if ($validatedData['status'] == null || $validatedData['keperluan']==null) {
            $validatedData['status'] = $academicService->status;
            $validatedData['keperluan'] = $academicService->keperluan;
        }

        // dd($validatedData);
        date_default_timezone_set('Asia/Jakarta');

        // $validatedData['updated_at'] = date('Y-m-d G:i:s');
        AcademicServices::where('id', $academicService->id)
            ->update($validatedData);

        return redirect('/academic-services')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicServices  $academicService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicServices $academicService)
    {
        AcademicServices::destroy($academicService->id);
        return redirect('/academic-services')->with('success', 'data berhasil dihapus!');
    }
}
