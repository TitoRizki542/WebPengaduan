<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class StatusAduanController extends Controller
{
    public function setuju()
    {
        $statusSetuju = Pengaduan::where('status','Setuju')->get();
        // dd($statusSetuju);

        return view('petugas.status.setuju', compact('statusSetuju'));
    }

    public function tolak()
    {
        $statusTolak = Pengaduan::where('status','tolak')->get();
        // dd($statusSetuju);

        return view('petugas.status.tolak', compact('statusTolak'));
    }
}
