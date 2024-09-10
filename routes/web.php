<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Overia Lingga',
        'email' => 'lilyvia@mail.stanford.ac.id'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
