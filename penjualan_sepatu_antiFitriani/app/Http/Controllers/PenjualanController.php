<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Member;
use App\Models\Sepatu;
use App\Models\User;
use App\Models\Supplier;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan= Penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan= Penjualan::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        $user = User::all();
        $supplier = Supplier::all();
        return view('home.penjualan.tambah', compact('penjualan', 'member', 'sepatu', 'user', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'id_kasir' => $request -> id_kasir,
            'id_member' => $request -> id_member,
            'id_sepatu' => $request -> id_sepatu,
            'tgl_bayar' => $request -> tgl_bayar,
            'jumlah_bayar'  => $request -> jumlah_bayar
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan= Penjualan::find($id);
        $member = Member::all();
        $sepatu = Sepatu::all();
        $user = User::all();
        $supplier = Supplier::all();
        return view('home.penjualan.edit', compact('penjualan', 'member', 'sepatu', 'user', 'supplier'));
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
        $penjualan= Penjualan::find($id);
        $penjualan::update([
            'id_kasir' => $request -> id_kasir,
            'id_member' => $request -> id_member,
            'id_sepatu' => $request -> id_sepatu,
            'tgl_bayar' => $request -> tgl_bayar,
            'jumlah_bayar'  => $request -> jumlah_bayar,
            $request -> except(['_token'])
        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan= Penjualan::find($id);
        $penjualan-> delete();
        return redirect('/penjualan');
    }

    public function cetak(){
        $penjualan = Penjualan::all();
        return view('home.penjualan.cetak', compact('penjualan'));
    }

    public function struk($id){
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.struk', compact('penjualan'));
    }
}
