<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Book;

use App\Http\Controllers\BookController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/home', function () {
    return "home";
});

Route::get('book/add', function() {
    DB::table('books')->insert([
        'name'=>'Война и Мир',
        'author'=>'Лев Толстой',
        'year'=>'1867'
    ]);
});

Route::get('book', [BookController::class, 'index']);
Route::get('book/create', function(){
    return view('book.create');
});

Route::post('book/create', [BookController::class, 'store'])->name('add-book');

Route::get('book/{id}', [BookController::class, 'get_book']);