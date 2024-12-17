<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PengaduanUserController extends Controller
{
     public function index()
    {
        return view('user.pengaduan.index');
    }
    
    public function store(Request $request)
    {
        // dd($request->all());

        // dd(auth()->user());   
       $dataAduan = $request->validate([
            'users_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            ]);

        $dataAduan['users_id'] = Auth::id();

        // dd($dataAduan);

        Pengaduan::create($dataAduan);

        return redirect()->route('home.index')->with(['success','Laporan Pengaduan berhasil disimpan']);

    }
}
