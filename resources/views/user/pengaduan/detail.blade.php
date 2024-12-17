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
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list shadow">
                        <a href="#" class="active">Buat Pengaduan <i class="bi bi-check-circle"></i></a>
                        <a href="#" class="active">Tanggapan Aduan <i class="bi bi-check-circle"></i></a>
                        <a href="#" class="active">Selesai <i class="bi bi-check-circle"></i></a>
                    </div>
                    <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="text-primary mt-3 mb-3">Tahapan Pengaduan</h2>
                        <h4>1. Buat Pengaduan</h4>
                        <p style="text-align: justify">
                            Tahap ini adalah langkah awal di mana pelapor mengajukan keluhannya. Prosesnya dimulai dengan
                            pengumpulan informasi penting yang mendukung pengaduan. Biasanya, pelapor diminta mengisi
                            formulir yang mencakup identitas diri, kontak yang dapat dihubungi, dan deskripsi masalah yang
                            diadukan.
                        </p>
                        <h4>2. Tanggapan Aduan</h4>
                        <p style="text-align: justify">
                            pengaduan dianalisis untuk menentukan inti masalah dan solusi yang diperlukan. Pihak berwenang
                            kemudian memberikan tanggapan resmi kepada pelapor. Respon ini mencakup status pengaduan
                            (misalnya, sedang diproses atau diterima atau juga ditolak) dan langkah-langkah yang akan
                            diambil untuk menangani
                            permasalahan.
                        </p>
                        <h4>3. Selesai</h4>
                        <p style="text-align: justify">
                            Untuk memastikan pelapor puas dengan penyelesaian, sistem memberikan ruang bagi pelapor untuk
                            memberikan konfirmasi. Jika pelapor menyatakan bahwa masalah telah selesai, pengaduan akan
                            ditutup. Semua proses dan hasil penyelesaian dicatat dalam arsip untuk keperluan evaluasi dan
                            peningkatan kualitas layanan di masa mendatang.
                        </p>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <section id="portfolio-details" class="portfolio-details section">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy">
                                <div class="col-lg-12">
                                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                                        <h3>Detail Data Aduan</h3>
                                        <ul>
                                            <li><strong>Judul</strong>: {{ $detailTanggapan->pengaduan->judul }}</li>
                                            <li><strong>Deskripsi</strong>: {{ $detailTanggapan->pengaduan->deskripsi }}
                                            </li>
                                            <li><strong>Tanggal Aduan</strong>:
                                                {{ $detailTanggapan->pengaduan->created_at }}</li>
                                            <li><strong>Status</strong>:
                                                @if ($detailTanggapan->pengaduan->status == 'Tolak')
                                                    <div class="status-ditolak">
                                                        <h2>Ditolak</h2>
                                                    </div>
                                                @elseif($detailTanggapan->pengaduan->status == 'Setuju')
                                                    <div class="status-disetujui">
                                                        <h2>Disetujui</h2>
                                                    </div>
                                                @elseif($detailTanggapan->pengaduan->status == 'Proses')
                                                    <div class="status-proses">
                                                        <h2>Dalam Proses</h2>
                                                    </div>
                                                @endif
                                            </li>
                                            <li><strong>Petugas Respon</strong>:
                                                {{ $detailTanggapan->petugas->nama }}</li>
                                        </ul>
                                        <h3></h3>
                                        <div class="text-end">
                                            <a href=""
                                                class="btn btn-info text-white rounded-pill text-end shadow">Cetak
                                                Laporan</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                        <h4>Balasan Aduan :</h2>
                                            <p style="text-align: justify">
                                                {{ $detailTanggapan->komentar }}
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- /Portfolio Details Section -->
                </div>
            </div>
        </div>
    </section>
@endsection
