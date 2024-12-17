<?php

namespace App\Http\Controllers\Petugas;

use App\Models\Pengaduan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         
        $jumlahAduan = Pengaduan::count();
        // dd($jumlahAduan);
        $aduanSetuju = Pengaduan::where('status','Setuju')->count();
        $aduanTolak = Pengaduan::where('status','Tolak')->count();
        $aduanProses = Pengaduan::where('status','Proses')->count();

        return view('petugas.dashboard.index',compact('jumlahAduan','aduanSetuju','aduanTolak','aduanProses'));
    }
}
