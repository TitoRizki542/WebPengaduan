<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dataPetugas = Petugas::all();
        $dataUser = User::all();


        return view('admin.master.app',compact('dataPetugas','dataUser'));
    }
}
