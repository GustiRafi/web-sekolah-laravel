<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardGoalController;
use App\Http\Controllers\DashboardSejarahController;
use App\Http\Controllers\DashboardPerpusController;
use App\Http\Controllers\DashboardTestiController;
use App\Http\Controllers\DashboardLowkerConteroller;
use App\Http\Controllers\DashboardDudikaController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashbaordPpdbController;
use App\Http\Controllers\DashboardVidioController;
use App\Http\Controllers\commentController;
use Illuminate\Support\Facades\DB;


// models
use \App\Models\berita;
use \App\Models\contact;
use \App\Models\sambutan;
use \App\Models\ppdb;
use \App\Models\vidio;
use \App\Models\jurusan;
use \App\Models\goal;
use \App\Models\sejarah;
use \App\Models\galeri;
use \App\Models\teacher;
use \App\Models\student;
use \App\Models\testimoni;
use \App\Models\perpust;
use \App\Models\dudika;
use \App\Models\lowongan;
use \App\Models\comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// untuk user biasa
Route::get('/',function(){
    return view('Home.index',[
        'title' => 'Home',
        'beritas' => berita::orderBy('id','desc')->limit(5)->get(),
        'contacts' => contact::all(),
        'vidios' => vidio::all(),
        'ppdbs' => ppdb::all(),
        'sambutans' => sambutan::all(),
        'jurusans' => jurusan::all(),
        'photos' => galeri::latest()->limit(1)->get(),
        'jumbutrons' => galeri::latest()->limit(3)->get(),
    ]);
});

Route::post('/comment',[commentController::class,'store']);

Route::get('/berita/read/{slug}',function($slug){

    $berita = berita::firstWhere('slug',$slug);
    return view('Home.detail',[
        'berita' => berita::firstWhere('slug',$slug),
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'comments' => DB::table('comments')->orderBy('id','desc')->where('berita_id', $berita->id)->get(),
        'title' => 'detail berita',
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});

Route::get('/sambutan/read/{slug}',function($slug){
    return view('Home.detail',[
        'sambutan' => sambutan::firstWhere('slug',$slug),
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'title' => 'detail sambutan',
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/ppdb/detail',function(){
    return view('detailPpdb.index',[
        'sambutan' => sambutan::all(),
        'ppdbs' => ppdb::all(),
        'jurusans' => jurusan::all(),
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'title' => 'detail sambutan',
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/Profile', function () {
    return view('Profile/index',[
        'title' => 'Profile',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'jurusans' => jurusan::all(),
        'goals' => goal::all(),
        'sejarahs' => sejarah::all(),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/Guru', function () {
    return view('Guru/index',[
        'title' => 'Guru',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'teachers' => teacher::paginate(15),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/Siswa', function () {
    return view('Siswa/index',[
        'title' => 'Siswa',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'siswas' => student::search(request(['search']))->paginate(36)->withQueryString(),
        'testimonis' => testimoni::latest(),
        'jurusans' => jurusan::all(),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/pencarian/hasil', function () {
    return view('cari.index',[
        'title' => 'hasil pencarian',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'beritas' => berita::search(request(['search']))->paginate(36)->withQueryString(),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/Perpus', function () {
    return view('Perpus/index',[
        'title' => 'Perpus',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'perpusts' => perpust::all(),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/BKK', function () {
    return view('BKK/index',[
        'title' => 'BKK',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'dudikas' => dudika::all(),
        'lowkers' => lowongan::latest()->paginate(5),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/lowongan/detail/{slug}',function($slug){
    return view('BKK.detail',[
        'lowker' => lowongan::firstWhere('slug',$slug),
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'title' => 'detail berita',
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});
Route::get('/Galery', function () {
    return view('Galery/index',[
        'title' => 'Galery',
        'contacts' => contact::all(),
        'sambutans' => sambutan::all(),
        'galeris' => galeri::latest()->paginate(6),
        'vidios' => vidio::orderBy('id', 'desc')->paginate(4),
        'photos' => galeri::latest()->limit(1)->get(),
    ]);
});

// untuk admin
Route::get('/dashboard', function () {
    return view('Admin.Home.index',[
        'title' => 'Dashboard'
    ]);
})->middleware('IsAdmin');

Route::get('/Login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/Login',[LoginController::class,'authenticate']);
Route::post('/Logout',[LoginController::class,'Logout']);

Route::get('/dashboard/berita/checkslug',[DashboardPostController::class,'checkslug'])->middleware('IsAdmin');
Route::resource('/dashboard/berita', DashboardPostController::class)->middleware('IsAdmin');
Route::resource('/dashboard/sambutan', SambutanController::class)->except("create",'store', 'destroy')->middleware('IsAdmin');

Route::resource('/dashboard/galery', GaleriController::class)->except('show')->middleware('IsAdmin');
Route::resource('/dashboard/jurusan', DashboardJurusanController::class)->except('show')->middleware('IsAdmin');
Route::resource('/dashboard/visimisi',DashboardGoalController::class)->except('create','store','destroy')->middleware('IsAdmin');

Route::resource('/dashboard/sejarah',DashboardSejarahController::class)->except('create','store','destroy')->middleware('IsAdmin');
Route::resource('/dashboard/perpus',DashboardPerpusController::class)->except('create','store','destroy')->middleware('IsAdmin');
Route::resource('/dashboard/testimoni', DashboardTestiController::class)->middleware('IsAdmin');

Route::resource('/dashboard/lowongan', DashboardLowkerConteroller::class)->middleware('IsAdmin');
Route::resource('/dashboard/dudika', DashboardDudikaController::class)->except('show')->middleware('IsAdmin');
Route::resource('/dashboard/vidio', DashboardVidioController::class)->except('show')->middleware('IsAdmin');

Route::resource('/dashboard/guru', DashboardGuruController::class)->except('show')->middleware('IsAdmin');
Route::resource('/dashboard/Siswa', DashboardSiswaController::class)->except('show')->middleware('IsAdmin');
Route::resource('/dashboard/contact', DashboardContactController::class)->except('show','create')->middleware('IsAdmin');
Route::resource('/dashboard/ppdb', DashbaordPpdbController::class)->except('show','create','store','destroy')->middleware('IsAdmin');