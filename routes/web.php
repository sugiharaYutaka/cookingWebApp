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


Route::get('/dictionary', function () {
    return 'これは未実装のルートです';
})->name('dictionary');

Auth::routes();

Route::get('/home', [App\Http\Controllers\SNS\HomeController::class, 'index'])->name('home');

Route::get('/sns', [App\Http\Controllers\SNS\HomeController::class, 'index'])->name('sns');

Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');

Route::get('/top', [App\Http\Controllers\TopController::class, 'show']);



use App\Http\Controllers\ChapterController;

Route::get('/chapters', [App\Http\Controllers\ChapterController::class, 'index'])->name('study');
Route::post('/chapters', [App\Http\Controllers\ChapterController::class, 'show']);

Route::get('/chapter1', [App\Http\Controllers\Chapter1Controller::class, 'index'])->name('chapter1');
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');;
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');
Route::get('/top', [App\Http\Controllers\TopController::class, 'show'])->name('top');


Route::get('/sns/post', function () {
    return view('sns/snspost');
})->name('post');

Route::get('/profile', function () {
    return 'これは未実装のルートです';
})->name('profile');

Route::get('/debug',          [App\Http\Controllers\DebugController::class, 'show'])->name('debug');
Route::post('/debugRegister', [App\Http\Controllers\DebugController::class, 'getRegister'])->name('debugRegister');
Route::post('/debugPost',     [App\Http\Controllers\DebugController::class, 'getPost'])->name('debugPost');
Route::post('/debugReply',    [App\Http\Controllers\DebugController::class, 'getReply'])->name('debugReply');
Route::post('/debugProfile',  [App\Http\Controllers\DebugController::class, 'getProfile'])->name('debugProfile');
Route::post('/debugFollow',   [App\Http\Controllers\DebugController::class, 'getFollow'])->name('debugFollow');
Route::post('/debugChapter',  [App\Http\Controllers\DebugController::class, 'getChapter'])->name('debugChapter');
Route::post('/debugFollowers',  [App\Http\Controllers\FollowController::class, 'getFollow'])->name('debugFollowers');
