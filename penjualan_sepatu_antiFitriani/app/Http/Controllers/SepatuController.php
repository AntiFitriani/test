<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;
use App\Models\Supplier;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth()->User()->level == 'Admin'){
            $sepatu = Sepatu::all();
            return view('home.sepatu.index', compact('sepatu'));
        }else{
            return redirect('/login')->with('error', 'Maaf Anda Tidak Dapat Mengakses Halaman Supplier', 'Silajkan Login Sebagai Admin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sepatu = Sepatu::all();
        $supplier = Supplier::all();
        return view('home.sepatu.tambah', compact('sepatu', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sepatu::create([
            'id_supplier' => $request -> id_supplier,
            'nama_sepatu' => $request -> nama_sepatu,
            'merk' => $request -> merk,
            'warna' => $request -> warna,
            'stok'  => $request -> stok
        ]);
        return redirect('/sepatu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sepatu = Sepatu::find($id);
        $supplier = Supplier::all();
        return view('home.sepatu.edit', compact('sepatu', 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sepatu = Sepatu::find($id);
        $sepatu::update([
            'id_supplier' => $request -> id_supplier,
            'nama_sepatu' => $request -> nama_sepatu,
            'merk' => $request -> merk,
            'warna' => $request -> warna,
            'stok'  => $request -> stok,
            $request -> except(['_token'])
        ]);
        return redirect('/sepatu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sepatu = Sepatu::find($id);
        $sepatu -> delete();
        return redirect('/sepatu');
    }
}
