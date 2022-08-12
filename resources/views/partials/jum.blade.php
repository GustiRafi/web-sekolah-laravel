<!-- jumbotron -->
<div class="jumbotron w-100 h-100">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card  text-white">
                    <img src="/img/smk.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title  text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card  text-white">
                    <img src="/img/smk.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card  text-white">
                    <img src="/img/smk.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-center py-5"><strong>SELAMAT DATANG!!</strong></h1>
                    </div>
                </div>
            </div>
            @if( $title === 'Home')
            <div class="container mt-6">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col ">
                        <div data-aos="zoom-in" data-aos-delay="300">
                            <div class="card bg-info text-white text-center shadow ">
                                <h3 class="pt-3"><i class="bi bi-trophy-fill"></i></h3>
                                <h3>Prestasi</h3>
                                <p>Siswa SMK N 1 Bantul terus menoreh prestasi diberbagai bidang baik akademik
                                    maupun
                                    non akademik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-aos="zoom-in" data-aos-delay="400">
                            <div class="card bg-info text-white text-center shadow">
                                <h3 class="pt-3"><i class="bi bi-building "></i></h3>
                                <h3>Fasilitas</h3>
                                <p class="pb-2">SMK N 1 Bantul memiliki sarana prasarana yang lengkap dan mampu
                                    menunjang kegiatan
                                    siswa</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-aos="zoom-in">
                            <div class="card bg-info text-white text-center shadow">
                                <h3 class="pt-3"><i class="bi bi-book-half "></i></h3>
                                <h3>Akademi</h3>
                                <p class="pb-2">SMK N 1 Bantul meiliki {{ $jurusans->count() }} bidang kehalian yang
                                    sangat unggul</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div></div>
            @endif
        </div>
    </div>
</div>
<!-- end jumbotron -->