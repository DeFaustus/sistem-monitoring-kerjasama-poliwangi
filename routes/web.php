<?php

use App\Http\Controllers\KerjasamaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    return redirect('/login');
});
// Route::get('/test', function () {
//     return view('auth.layouts.main-login');
// });
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/tambah-kerja-sama', [KerjasamaController::class, 'tambahDataKerjasama']);
    Route::post('/tambah-kerjasama', [KerjasamaController::class, 'store']);
    Route::get('/data-kerjasama', [KerjasamaController::class, 'index']);
    Route::get('/download/{mou}', [KerjasamaController::class, 'download']);
});
