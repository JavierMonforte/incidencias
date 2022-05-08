<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabeautoController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource ('users', UserController::class)->middleware('auth');;
Route::get('CABEAUTO', [CabeautoController::class, 'index']);
Route::get('__CABEAUTO/create', [CabeautoController::class, 'create']);
Route::get('__CABEAUTO/{id}', [CabeautoController::class, 'show']);
Route::post('__CABEAUTO', [CabeautoController::class, 'store']);
Route::get('__CABEAUTO/{id}/edit', [CabeautoController::class, 'edit']);
Route::put('__CABEAUTO/{id}', [CabeautoController::class, 'update']);
Route::delete('__CABEAUTO/{id}', [CabeautoController::class, 'destroy']);