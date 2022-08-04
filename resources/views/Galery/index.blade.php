@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Galery Photo</h4>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri1.JPG" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri6.jpeg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri2.jpeg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri3.jpeg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri4.jpeg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/galeri5.jpeg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example ">
                <ul class="pagination mt-4 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div data-aos="fade-right">
            <div class="border border-5 border-info"></div>
        </div>
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Galery Video</h4>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
                <div class="col">
                    <div data-aos="zoom-in">
                        <div class="card">
                            <iframe class="text-center" height="197" src="https://www.youtube.com/embed/3wbUAGW8s2c"
                                title="DEMI PRESTASI | SHORT MOVIE KARYA SISWA SMK N 1 BANTUL 2022" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <div class="card">
                            <iframe class="text-center" height="197" src="https://www.youtube.com/embed/3wbUAGW8s2c"
                                title="DEMI PRESTASI | SHORT MOVIE KARYA SISWA SMK N 1 BANTUL 2022" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example ">
                <ul class="pagination mt-4 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- modals -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Galery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/galeri1.JPG" class="w-100" alt="" srcset="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection