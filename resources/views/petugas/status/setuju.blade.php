@extends('petugas.master.app')
@section('halaman', 'Laporan Pengaduan Status Disetujui')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Laporan Pengaduan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nomor</th>
                            <th>Nama Pengadu</th>
                            <th>Judul Aduan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statusSetuju as $data)
                            <tr class="text-center">
                                {{-- {{ dd($data) }} --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->user->nama }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>
                                    <a class="btn bg-gradient-success text-white btn-sm rounded-pill">Disetujui</i></a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
