@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <h4>Direktori Peserta Didik</h4>
            <div class="my-3">
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <form action="" class="d-flex justify-content-center" method="post">
                            <select name="" id="" class="form-select" aria-label="Default select example">
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                                <option value="">XIRPL2</option>
                            </select>
                            <button class="btn btn-info ms-3" type="submit">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped w-100 text-center">
                <tr class="border-2 border-end-0 border-start-0 border-dark">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
                <?php for($i=1; $i <= 5;){ ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="img/siswa.jpg" alt="guru" srcset=""></td>
                    <td>Indra Setiawan</td>
                    <td>Laki-Laki</td>
                </tr>
                <?php $i++ ?>
                <?php }?>
            </table>


            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
                <div class="col-12 col-md-4">
                    <div data-aos="fade-right">
                        <div class="d-flex my-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <span class="border border-5 border-primary"></span>
                            <h5 class="py-3 ps-3">Siswa Berprestasi</h5>
                        </div>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="300">
                        <div class="d-flex my-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <span class="border border-5 border-primary"></span>
                            <h5 class="py-3 ps-3">Osis</h5>
                        </div>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex my-3 rounded-3 shadow-sm" style="background-color: rgba(217, 217, 217, 1)">
                            <span class="border border-5 border-primary"></span>
                            <h5 class="py-3 ps-3">Rohis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div data-aos="fade-right" data-aos-delay="500">
                        <div class="my-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <div class="bg-info rounded-3 ">
                                <h5 class=" py-3 px-3">Testimoni Alumni SKANSABA</h5>
                            </div>
                            <div class="px-3 py-3">
                                <p>Alumni SMKN 1 Bantul sekarang ini sekitar 40% kuliah di PTN dan PTS, yang
                                    tersebar di berbagai Perguruan Tinggi di Indonesia. Sebagian langsung
                                    bekerja di
                                    Perusahaan Swasta, BUMN maupun Instansi Pemerintah, serta menciptakan
                                    lapangan
                                    kerja mandiri berwirausaha.</p>
                                <hr>
                                <div class="d-flex">
                                    <!-- <img src="img/alumni1.jpg" class="rounded-circle" alt="" srcset=""> -->
                                    <p class="ps-2"><strong>Atik Fajaryani</strong><br>Mahasiswi Prodi Akuntansi
                                        UNY
                                        ( Peraih
                                        peringkat 1 UN tingkat Nasional
                                        2010/2011 (Alumni Skansaba) )

                                        *Penyediaan fasilitas yang memadahi dan komitmen bapak/Ibu Guru yang
                                        kompeten di bidangnya, membuat saya memperoleh hasil belajar yang baik
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection