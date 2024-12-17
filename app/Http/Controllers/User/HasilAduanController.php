<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class HasilAduanController extends Controller
{
    public function index(){

        $dataTanggapan = Pengaduan::all();

        return view('user.pengaduan.tanggapan', compact('dataTanggapan'));
    }

    public function detail($id)
    {
        $detailTanggapan = Tanggapan::with('pengaduan')->where('id', $id)->first();

        return view('user.pengaduan.detail', compact('detailTanggapan'));
    }
}
