@extends('user.master.app')
@section('content')
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Formulir Pengaduan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home.index') }}">Beranda</a></li>
                    <li class="current">Pengaduan</li>
                </ol>
            </nav>
        </div>
    </div>
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        <a href="#" class="active">Buat Pengaduan</a>
                        <a href="#">Tanggapan Aduan</a>
                        <a href="#">Selesai</a>
                    </div>

                    <h4>Enim qui eos rerum in delectus</h4>
                    <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non
                        occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihi</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{ route('pengaduan.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Nama Pengadu</label>
                                <input type="text" name="users_id" class="form-control" required=""
                                    value="{{ auth()->user()->nama }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Email Pengadu</label>
                                <input type="email" class="form-control" id="email-field" required=""
                                    value="{{ auth()->user()->email }}" />
                            </div>
                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Judul</label>
                                <input type="text" class="form-control" name="judul" id="subject-field"
                                    required="" />
                            </div>
                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="5" id="message-field" required=""></textarea>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
