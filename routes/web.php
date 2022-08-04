<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\DashboardPostController;

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

// Route::get('/', function () {
//     return view('welcomeHome');
// });
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
Route::get('/dashboard', function () {
    return view('Admin.Home.index',[
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/Login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/Login',[LoginController::class,'authenticate']);
Route::post('/Logout',[LoginController::class,'Logout']);

Route::get('/dashboard/berita/checkslug',[DashboardPostController::class,'checkslug'])->middleware('auth');
Route::resource('/dashboard/berita', DashboardPostController::class)->middleware('auth');