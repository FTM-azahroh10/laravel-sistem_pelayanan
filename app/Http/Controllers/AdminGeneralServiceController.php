<?php

namespace App\Http\Controllers;

use App\Models\AdminGeneralService;
use Illuminate\Http\Request;

class AdminGeneralServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialServices = AdminGeneralService::all();
        if ($financialServices) {
            $data = $financialServices;
        }
        return response()->view('admin.components.generalServices.generalServices', ['data' => $data]);
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
     * @param  \App\Models\AdminGeneralService  $adminGeneralService
     * @return \Illuminate\Http\Response
     */
    public function show(AdminGeneralService $adminGeneralService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminGeneralService  $adminGeneralService
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminGeneralService $adminGeneralService,$id)
    {
        $data = AdminGeneralService::find($id);
        return response()->view('admin.components.generalServices.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminGeneralService  $adminGeneralService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminGeneralService $adminGeneralService,$id)
    {
        $data = AdminGeneralService::find($id);
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
        AdminGeneralService::where('id', $id)
            ->update($validatedData);

        return redirect('/general-services')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminGeneralService  $adminGeneralService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminGeneralService $adminGeneralService,$id)
    {
        AdminGeneralService::destroy($id);
        return redirect('/general-services')->with('success', 'data berhasil dihapus!');
    }
}
