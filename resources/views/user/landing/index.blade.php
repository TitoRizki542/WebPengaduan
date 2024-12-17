@extends('user.master.app')
@section('content')
    <section id="hero" class="hero section light-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Sistem Pengaduan <span>Online</span></h1>
                    <p>
                        Layanan Aduan Masyarakat Desa Candirejo berbasis Website
                    </p>
                    <div class="d-flex">
                        <a href="{{ route('pengaduan.index') }}" class="btn-get-started rounded-pill">Buat Aduan</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>
                            Voluptatum deleniti atque corrupti quos dolores et quas
                            molestias excepturi
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles icon"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week icon"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <section id="faq" class="faq section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>
                <span>Frequently Asked</span>
                <span class="description-title">Questions</span>
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                            <div class="faq-content">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
                                    id volutpat lacus laoreet non curabitur gravida. Venenatis
                                    lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                            <div class="faq-content">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque
                                    habitant morbi. Id interdum velit laoreet id donec
                                    ultrices. Fringilla phasellus faucibus scelerisque
                                    eleifend donec pretium. Est pellentesque elit ullamcorper
                                    dignissim. Mauris ultrices eros in cursus turpis massa
                                    tincidunt dui.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div class="faq-item">
                            <h3>
                                Dolor sit amet consectetur adipiscing elit pellentesque?
                            </h3>
                            <div class="faq-content">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                                    sagittis orci. Faucibus pulvinar elementum integer enim.
                                    Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis
                                    convallis convallis tellus. Urna molestie at elementum eu
                                    facilisis sed odio morbi quis
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div class="faq-item">
                            <h3>
                                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                            </h3>
                            <div class="faq-content">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque
                                    habitant morbi. Id interdum velit laoreet id donec
                                    ultrices. Fringilla phasellus faucibus scelerisque
                                    eleifend donec pretium. Est pellentesque elit ullamcorper
                                    dignissim. Mauris ultrices eros in cursus turpis massa
                                    tincidunt dui.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div class="faq-item">
                            <h3>
                                Tempus quam pellentesque nec nam aliquam sem et tortor?
                            </h3>
                            <div class="faq-content">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing
                                    commodo. Dignissim suspendisse in est ante in. Nunc vel
                                    risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis
                                    blandit turpis cursus in
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                            <div class="faq-content">
                                <p>
                                    Enim ea facilis quaerat voluptas quidem et dolorem. Quis
                                    et consequatur non sed in suscipit sequi. Distinctio ipsam
                                    dolore et.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->
                    </div>
                </div>
                <!-- End Faq Column-->
            </div>
        </div>
    </section>
@endsection
