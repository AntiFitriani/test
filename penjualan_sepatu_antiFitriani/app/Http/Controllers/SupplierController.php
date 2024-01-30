<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth()->User()->level == 'Admin'){
            $supplier = Supplier::all();
            return view('home.supplier.index', compact('supplier'));
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
        $supplier = Supplier::all();
        return view('home.supplier.tambah', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create([
            'nama_supplier' => $request -> nama_supplier,
            'nama_perusahaan' => $request -> nama_perusahaan,
            'alamat' => $request -> alamat,
            'no_tlp_supplier' => $request -> no_tlp_supplier,
            'no_tlp_perusahaan'  => $request -> no_tlp_perusahaan
        ]);
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);
        return view('home.supplier.edit', compact('supplier'));
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
        $supplier = Supplier::find($id);
        $supplier->update([
            'nama_supplier' => $request -> nama_supplier,
            'nama_perusahaan' => $request -> nama_perusahaan,
            'alamat' => $request -> alamat,
            'no_tlp_supplier' => $request -> no_tlp_supplier,
            'no_tlp_perusahaan'  => $request -> no_tlp_perusahaan,
            $request -> except(['_token'])
        ]);
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier -> delete();
        return redirect('/supplier');
    }
}
