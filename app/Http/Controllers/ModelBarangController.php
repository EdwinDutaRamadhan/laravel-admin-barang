<?php

namespace App\Http\Controllers;

use App\Models\ModelBarang;
use App\Http\Requests\UpdateModelBarangRequest;
use Illuminate\Http\Request;

class ModelBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModelBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelBarang::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelBarang  $modelBarang
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('/dashboard', ['barang'=> ModelBarang::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelBarang  $modelBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelBarangRequest  $request
     * @param  \App\Models\ModelBarang  $modelBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        ModelBarang::where('id', $request->id)->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
        return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelBarang  $modelBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        ModelBarang::where('id', $request->id)->delete();
        return redirect('/dashboard');
    }

    /** 
     * Get single data
     * 
     * 
    */
    public function single(Request $request){
        return view('dashboard-update-barang',[
            'action' => '/update_proses',
            'submit' => 'update',
            'barang' => ModelBarang::where('id',$request->id)->get()
        ] );
    }


}
