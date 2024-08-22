@extends('layouts/main')


@section('template')
    <!-- Carousel-->
    <div class="container">
        <div class="d-flex">
            <div class="card mt-5 mb-5" style="max-width: 1640px;">
                <div class="row g-0">
                    <div class="col-md-7">
                        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/img(4).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img(5).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img(6).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img(7).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img(8).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/img(9).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <p class="h5"> SMAN 1 Depok beralamat Jl.Babarsari, Kel. Caturtunggal, Kec. Depok, Kab.
                                Sleman,
                                Tambak Bayan, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                                adalah salah
                                satu sekolah unggulan yang ada di wilayah Sleman Yogyakarta. Sekolah ini merupakan
                                sekolah yang memiliki visi dan misi meningkatkan kualitas kegiatan belajar mengajar.
                            </p>
                            <p class="h5"> Salah satu upaya yang dilakukan adalah dengan melakukan penilaian terhadap
                                guru,
                                penilaian kinerja di SMA N 1 Depok Yogyakarta dilaksanakan sekali dalam setahun, untuk
                                prosesnya
                                dilakukan oleh kepala sekolah dan 5 guru yang memiliki sertifikat assessor, diantara
                                tugasnya yaitu
                                melaksanakan perhitungan kinerja dengan pengamatan langsung terhadap guru saat prosesi
                                kegiatan
                                belajar mengajar
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Akhir Carousel -->
@endsection
