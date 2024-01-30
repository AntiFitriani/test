<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Member;
use App\Models\Penjualan;
use App\Models\Sepatu;
use App\Models\Supplier;
use App\Models\User;

class DashboardController extends Controller
{
    
    public function index()
    {
        $jumlah_sepatu = Sepatu::sum('stok');
        $jumlah_member = Member::count();
        $jumlah_user = User::count();
        $penjualan = Penjualan::Select()->orderBy('tgl_bayar', 'desc')
        ->limit(7)
        ->get();
        $today = Carbon::today();
        $endDate = Carbon::today()->subDays(7);
        $total_minggu = Penjualan::Select(Penjualan::raw('SUM(jumlah_bayar) as total_price'))
        ->whereBetween ('tgl_bayar', [$endDate, $today])->first();
        return view('home.dashboard', compact('jumlah_sepatu', 'jumlah_member', 'jumlah_user', 'penjualan'),['total_minggu'=>$total_minggu]);
    }

}
