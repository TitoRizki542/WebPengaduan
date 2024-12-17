@extends('petugas.master.app')
@section('halaman', 'Laporan Pengaduan')
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
                        @foreach ($laporanAduan as $data)
                            <tr class="text-center">
                                {{-- {{ dd($data) }} --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->user->nama }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>
                                    @if ($data->status == 'Proses')
                                        <a
                                            class="btn bg-gradient-warning text-white btn-sm rounded-pill"></i>{{ $data->status }}</a>
                                    @elseif ($data->status == 'Setuju')
                                        <a
                                            class="btn bg-gradient-success text-white btn-sm rounded-pill"></i>{{ $data->status }}</a>
                                    @elseif($data->status == 'Tolak')
                                        <a
                                            class="btn bg-gradient-danger text-white btn-sm rounded-pill"></i>{{ $data->status }}</a>
                                    @endif

                                <td>
                                    <a href="{{ route('laporan.detail', $data->id) }}" class="btn btn-info"><i
                                            class="fa-solid fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
