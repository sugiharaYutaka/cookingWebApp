<?php

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
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Stub Route
|--------------------------------------------------------------------------
*/
Route::get('/study', function () {
    return 'これは未実装のルートです';
})->name('study');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD


// routes/web.php
use App\Http\Controllers\ChapterController;

Route::get('/chapters', [App\Http\Controllers\ChapterController::class, 'index']);
Route::post('/chapters', [App\Http\Controllers\ChapterController::class, 'show']);
=======
<<<<<<< HEAD
Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');
=======
Route::get('/top', [App\Http\Controllers\TopController::class, 'show']);


>>>>>>> 2b84d799e603aff16d3ebf9c37e0b4cfdcfbdb74
>>>>>>> f5a2385a2903fc4ad430aa683c136f1212ec1239
