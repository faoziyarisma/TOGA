<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\togaController;
use App\Http\Controllers\produksi_togaController;
use App\Http\Controllers\LoginController;
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
//     return view('welcome');
// });
//Route Home (Beranda)
Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

//Route KWT
Route::get('/kwt', function () {
    return view('kwt',[
        "title" => "KWT",
        "active" => "kwt"
    ]);
});

//Route TOGA
Route::get('/toga', [togaController::class, 'index']);

//Route Produksi TOGA
Route::get('/produksi_toga', [produksi_togaController::class, 'index']);

//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

//Autentikasi Login
Route::post('/login', [LoginController::class, 'authenticate']);

//Route Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Route Dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index');

})->middleware('auth');
