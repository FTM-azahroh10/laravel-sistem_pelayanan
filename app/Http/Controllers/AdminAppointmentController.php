<?php

namespace App\Http\Controllers;

use App\Models\AdminAppointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = AdminAppointment::all();
        if ($appointment) {
            $data = $appointment;
        }
        return response()->view('admin.components.appointment.appointment', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.components.appointment.create');
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
            'nama' => 'required',
            'email' => 'required',
            'service' => 'required',
            'start_appointment' => 'required',
            'end_appointment' => 'required'
        ]);
        AdminAppointment::create($validatedData);
        return redirect('/appointment-admin')->with('success', 'data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(AdminAppointment $adminAppointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminAppointment $adminAppointment,$id)
    {
        $data = AdminAppointment::find($id);
        return response()->view('admin.components.appointment.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminAppointment $adminAppointment,$id)
    {
        $data = AdminAppointment::find($id);
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'service' => 'required',
            'start_appointment' => 'required',
            'end_appointment' => 'required'
        ]);
        if ($validatedData['service'] == null) {
            $validatedData['service'] = $data->service;
        }

        // dd($validatedData);
        date_default_timezone_set('Asia/Jakarta');

        // $validatedData['updated_at'] = date('Y-m-d G:i:s');
        AdminAppointment::where('id', $id)
            ->update($validatedData);

        return redirect('/appointment-admin')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAppointment $adminAppointment,$id)
    {
        AdminAppointment::destroy($id);
        return redirect('/appointment-admin')->with('success', 'data berhasil dihapus!');
    }
}
