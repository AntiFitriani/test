<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class HistoryController extends Controller
{
    public function index(){
        return view('home.history.index');
    }
    public function hasil(Request $request){
        $idHistory = $request -> id;
        $penjualan = Penjualan::where('id_member', '=', $idHistory)->get();
        return view('home.history.hasil', compact('penjualan'));
    }
}