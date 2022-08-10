<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

use \App\Models\sambutan;
use \App\Models\contact;
use \App\Models\ppdb;
use \App\Models\jurusan;
use \App\Models\sejarah;
use \App\Models\goal;
use \App\Models\student;
use \App\Models\teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        // berita::factory(10)->create()

        User::create([
            'name' =>'Rafi',
            'email' =>'gustirafi49@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        sambutan::create([
            'title' => 'Sambutan Kepala Sekolah',
            'slug' => 'sambutan-kepala-sekolah',
            'image' => 'berita/sambutan.jpeg',
            'excerp' => 'isdhfiusahdcsdadaasdwsgdjh',
            'description' => 'ajughsinfshiegjaioueydjisjjjsisjsfsdsnsdjsnsujfsnijsnsjdisiisisiisiiwisabrksdiwjjsabrieuwewhdc'
        ]);

        goal::create([
            'title' => 'Visi',
            'body' => 'eoshfosidnaiodgboaseagaetaetaveaege'
        ]);
        goal::create([
            'title' => 'Misi',
            'body' => 'eoshfosidnaiodgboaseagaetaetaveaege'
        ]);

        contact::create([
            'alamat' => 'sofojsdijf',
            'email' => 'smk1bantul@gmail.com',
            'telp' => '23984908634685',
            'fax' => '077553437983568'
        ]);


        sejarah::create([
            'title' => 'Sejarah Singkat',
            'image' => 'sejarah/ouahuahf',
            'body' => 'jduhfushdfhsihfihsijefisojfasohfosjdihisdsgsrg'
        ]);

        jurusan::create([
            'jurusan_name' => 'Rekayasa Perangkat Lunak',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Multimedia',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Teknik Komputer Dan Jaringan',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Bisnis Daring Dan Pemasaran',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Perbankan Syariah',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Otomatisai Tata Kelola Perkantoran',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);
        jurusan::create([
            'jurusan_name' => 'Akutansi Dan Keuangan Lembaga',
            'rombel' => '2',
            'jml_siswa' => '72'
        ]);

        ppdb::create([
            'excrept' => 'kdhfhihishdisidjsidsb',
            'image' => 'ppdb/sdshds',
            'body' => 'jdhushdjskkjosjskshsho'
        ]);

        student::factory(500)->create();
        teacher::factory(80)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}