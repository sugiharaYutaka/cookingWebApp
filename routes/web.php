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

Route::get('/recipe', function () {
    return 'これは未実装のルートです';
})->name('recipe');

Route::get('/sns', function () {
    return view("sns");
})->name('sns');

Route::get('/dictionary', function () {
    return 'これは未実装のルートです';
})->name('dictionary');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ChapterController;

Route::get('/chapters', [App\Http\Controllers\ChapterController::class, 'index']);
Route::post('/chapters', [App\Http\Controllers\ChapterController::class, 'show']);

Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');
<<<<<<< HEAD
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');;
=======
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');
>>>>>>> 34db0826ededd07a93376ac31b3dc803fbb9c149


Route::get('/home', function () {
    return 'これは未実装のルートです';
})->name('home');

Route::get('/post', function () {
    return 'これは未実装のルートです';
})->name('post');

Route::get('/profile', function () {
    return 'これは未実装のルートです';
})->name('profile');
