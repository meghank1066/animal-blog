<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PetMatchController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/sharehub', function () {
//     return view('layouts.feature.sharehub');
// })->name('sharehub');


Route::get('/sharehub', [GalleryController::class, 'index'])->name('sharehub');
Route::post('/upload', [GalleryController::class, 'upload'])->name('upload');
Route::post('/comment', [GalleryController::class, 'comment'])->name('comment');

Route::get('/about', function () {
    return view('layouts.feature.about');
})->name('about');


//quiz

Route::get('/quiz', [PetMatchController::class, 'showQuizForm']);
Route::post('/quiz', [PetMatchController::class, 'match'])->name('quiz.match');
