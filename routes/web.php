<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\togaController;
use App\Http\Controllers\produksi_togaController;

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
Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/kwt', function () {
    return view('kwt',[
        "title" => "KWT",
        "active" => "kwt"
    ]);
});

Route::get('/toga', [togaController::class, 'index']);
Route::get('/produksi_toga', [produksi_togaController::class, 'index']);
// Route::get('/', [LoginController::class, 'index']);
