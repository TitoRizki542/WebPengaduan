<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanAduanController extends Controller
{
    public function index()
    {
        // $laporanAduan = Tanggapan::with('pengaduan')->where('id','DESC')->get();
        $laporanAduan = Pengaduan::all();
        // dd($laporanAduan);
        return view('petugas.laporan.aduan', compact('laporanAduan'));
    }

    public function detail($id)
    {
       $laporanAduan = Pengaduan::find($id);

       return view('petugas.laporan.detail', compact('laporanAduan'));
    }
    
    public function respon(Request $request, $id){

    $dataTanggapan = $request->validate([
        'komentar' => 'required|string',
    ]);
    // Ambil data pengaduan berdasarkan ID
    $pengaduan = Pengaduan::findOrFail($id);
    
    $request->validate([
        'status'
    ]);
    // dd($request);
    // Ubah status pengaduan
    $pengaduan->status = $request->status; // Ubah sesuai logika Anda (misalnya 'diproses' atau 'selesai')
    if ($pengaduan->status == null){
        $pengaduan->save();
    }else{
        $pengaduan->update();
    }


    // Simpan tanggapan di tabel tanggapan
    Tanggapan::create([
        'pengaduan_id' => $pengaduan->id,
        'petugas_id' => Auth::guard('petugas')->id(),
        'komentar' => $dataTanggapan['komentar'],
    ]);


        return redirect()->route('laporan.index')->with('success', 'Tanggapan berhasil disimpan');
    }
}

