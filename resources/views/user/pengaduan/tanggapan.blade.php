@extends('user.master.app')
@section('content')
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Tanggapan Pengaduan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home.index') }}">Beranda</a></li>
                    <li class="current">Tanggapan</li>
                </ol>
            </nav>
        </div>
    </div>
    <section id="pricing" class="pricing section mt-4">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>
                <span>Pengajuan Aduan</span>
                <span class="description-title">Saya</span>
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row mb-2 ">
                @foreach ($dataTanggapan as $item)
                    <div class="col-lg-7 mb-4">
                        <div class="pricing-item">
                            <h3>{{ $item->judul }}</h3>
                            <div class="text-start">
                                <div class="row">
                                    <div class="d-flex justify-content-start gap-3">
                                        <h6>Nama Pengadu : </h6>
                                        <h6> {{ $item->user->nama }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-start gap-3">
                                        <h6>Tanggal : </h6>
                                        <h6> {{ $item->created_at }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-start gap-3 mb-3">
                                        <h6>Status : </h6>
                                        @if ($item->status == 'Tolak')
                                            <div class="status-ditolak">
                                                <h2>Ditolak</h2>
                                            </div>
                                        @elseif($item->status == 'Setuju')
                                            <div class="status-disetujui">
                                                <h2>Disetujui</h2>
                                            </div>
                                        @elseif($item->status == 'Proses')
                                            <div class="status-proses">
                                                <h2>Dalam Proses</h2>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            @if ($item->status == 'Proses')
                            @else
                                <div class="btn-wrap">
                                    <a href="{{ route('tanggapan.detail', $item->id) }}"
                                        class="btn-buy rounded-pill btn-sm ">Lihat Tanggapan</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
