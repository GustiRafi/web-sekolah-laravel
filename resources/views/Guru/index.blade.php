@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <h4>Guru Dan Tenaga Kependidikan </h4>
            <table class="table table-striped w-100 text-center">
                <tr class="border-2 border-end-0 border-start-0 border-dark">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
                <?php for($i=1; $i <= 10;){ ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="img/guru.jpg" alt="guru" srcset=""></td>
                    <td>Budi Purnomo</td>
                    <td>Laki-Laki</td>
                </tr>
                <?php $i++ ?>
                <?php }?>
            </table>
            <div class="text-center my-3">
                <button class="btn btn-info rounded-3">Lihat Selengkapnya</button>
            </div>
        </div>
    </div>
</div>
@endsection