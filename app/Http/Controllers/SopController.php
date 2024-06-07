<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sop = Sop::all();
        if ($sop) {
            $data = $sop;
        }
        return response()->view('admin.components.sop.sop', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.components.sop.create');
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
            'kategori' => 'required',
            'deskripsi' => 'required',
            'tahun' => 'required',
        ]);
        Sop::create($validatedData);
        return redirect('/sop')->with('success', 'data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function show(Sop $sop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function edit(Sop $sop)
    {
        // $data = Sop::find($id);
        $data = $sop;
        return response()->view('admin.components.sop.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sop $sop)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
            'tahun' => 'required',
        ]);
        Sop::where('id', $sop->id)->update($validatedData);
        return redirect('/sop')->with('success', 'data berhasil tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sop $sop)
    {
        Sop::destroy($sop->id);
        return redirect('/sop')->with('success', 'data berhasil dihapus!');
    }
}
