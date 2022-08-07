<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\berita;
use \App\Models\sambutan;
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
        // berita::factory(10)->create();
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}