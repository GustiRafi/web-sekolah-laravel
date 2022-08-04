@extends('layouts.main')

@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>BKK</h4>
                <p>Daftar Dudika yg kerjasama dg BKK antara lain :
                </p>
            </div>
            <div data-aos="fade-right">
                <ol>
                    <li>PT. Busana Remaja Acracipta</li>
                    <li>MATAHARI group</li>
                    <li>MIROTA KAMPUS</li>
                    <li>PT. AMEYA</li>
                    <li>Toko Gardena</li>
                    <li>Toko Mas Semar Nusantara</li>
                    <li>CV. Aulia Pratama</li>
                    <li>Shorum motor ADIRA</li>
                    <li>PT.Paragon</li>
                    <li>Ramayana</li>
                    <li>Alfa Mart</li>
                    <li>PT. Duta Wibawa Manda Putra</li>
                    <li>PT. SMU</li>
                    <li>DLL</li>
                </ol>
            </div>
            <div data-aos="fade-right">
                <h4>Lowongan Pekerjaan</h4>
            </div>
            <div data-aos="fade-right">
                <div class="border border-5 border-info"></div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/loker1.jpg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/loker2.jpg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/loker2.jpg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/loker4.jpg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="img/loker5.jpg" class="card-img-top" alt="img/galeri1.JPG">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modals -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Lowongan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/loker1.jpg" class="w-100" alt="" srcset="">
                <p class="py-3">CV. Aulia Pratama butuh tenaga 3 orang dari jurusan Multimedia
                    <br>
                    Info lengkap hubungi :<br>
                    Nama : cahyo JS<br>
                    Alamat : CV. AULIA PRATAMA Jl. Ringroad Timur No. 1a,<br>
                    (30 meter utara lampu merah kotagede, timur jalan)<br>
                    Jogoragan, Banguntapan 55198<br>
                    Desa : Banguntapan<br>
                    Kec : Banguntapan<br>
                    Kota : Bantul<br>
                    No hp : 085358005545<br>
                    <br>
                    Diposting tanggal 1 November 2021<br>
                    <br>
                    Info lengkap, hubungi Ibu Sumaryati - BKK
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection