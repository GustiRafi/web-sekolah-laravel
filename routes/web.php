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
Route::get('/',[HomeController::class, 'index']);
Route::get('/Profile', function () {
    return view('Profile/index',[
        'title' => 'Profile'
    ]);
});
Route::get('/Guru', function () {
    return view('Guru/index',[
        'title' => 'Guru'
    ]);
});
Route::get('/Siswa', function () {
    return view('Siswa/index',[
        'title' => 'Siswa'
    ]);
});
Route::get('/Perpus', function () {
    return view('Perpus/index',[
        'title' => 'Perpus'
    ]);
});
Route::get('/BKK', function () {
    return view('BKK/index',[
        'title' => 'BKK'
    ]);
});
Route::get('/Galery', function () {
    return view('Galery/index',[
        'title' => 'Galery'
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