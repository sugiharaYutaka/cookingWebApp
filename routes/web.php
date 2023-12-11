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

Route::get('/home', [App\Http\Controllers\SNS\HomeController::class, 'index'])->name('home');


Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');

Route::get('/top', [App\Http\Controllers\TopController::class, 'show']);



use App\Http\Controllers\ChapterController;

Route::get('/chapters', [App\Http\Controllers\ChapterController::class, 'index'])->name('study');
Route::post('/chapters', [App\Http\Controllers\ChapterController::class, 'show']);

Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');;
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');


Route::get('/post', function () {
    return 'これは未実装のルートです';
})->name('post');

Route::get('/profile', function () {
    return 'これは未実装のルートです';
})->name('profile');

<<<<<<< HEAD
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
=======
>>>>>>> 569f3d296303ec2c9107b3c64a29c7a8731cbe23
