@extends('petugas.master.app')
{{-- @section('halaman', ' Detail Laporan Pengaduan') --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Informasi Aduan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pengadu</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $laporanAduan->user->nama }}">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email Pengadu</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $laporanAduan->user->email }}">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Aduan</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $laporanAduan->created_at }}">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul Aduan</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $laporanAduan->judul }}">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">deskiripsi Aduan</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $laporanAduan->deskripsi }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Informasi Aduan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <form action="{{ route('tanggapan.store', $laporanAduan->id) }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="status" name="status">
                                            <option value="Proses"
                                                {{ $laporanAduan->status == 'Proses' ? 'selected' : '' }}>
                                                Proses</option>
                                            <option value="Setuju"
                                                {{ $laporanAduan->status == 'Setuju' ? 'selected' : '' }}>
                                                Disetujui</option>
                                            <option value="Tolak" {{ $laporanAduan->status == 'Tolak' ? 'selected' : '' }}>
                                                Ditolak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="komentar" class="col-sm-2 col-form-label">Komentar</label>
                                    <div class="form-floating col-sm-10">
                                        <textarea class="form-control" placeholder="Berikan Tanggapan disini" id="komentar" name="komentar"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary rounded" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
