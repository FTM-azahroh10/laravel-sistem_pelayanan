<?php

namespace App\Http\Controllers;

use App\Models\AdminFinancialService;
use Illuminate\Http\Request;

class AdminFinancialServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialServices = AdminFinancialService::all();
        if ($financialServices) {
            $data = $financialServices;
        }
        return response()->view('admin.components.financialServices.financialServices', ['data' => $data]);
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
     * @param  \App\Models\AdminFinancialService  $adminFinancialService
     * @return \Illuminate\Http\Response
     */
    public function show(AdminFinancialService $adminFinancialService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminFinancialService  $adminFinancialService
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminFinancialService $adminFinancialService, $id)
    {
        $data = AdminFinancialService::find($id);
        return response()->view('admin.components.financialServices.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminFinancialService  $adminFinancialService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminFinancialService $adminFinancialService, $id)
    {
        $data = AdminFinancialService::find($id);
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
        AdminFinancialService::where('id', $id)
            ->update($validatedData);

        return redirect('/financial-services')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminFinancialService  $adminFinancialService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminFinancialService $adminFinancialService, $id)
    {
        AdminFinancialService::destroy($id);
        return redirect('/financial-services')->with('success', 'data berhasil dihapus!');
    }
}
