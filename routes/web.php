<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Book;

use App\Http\Controllers\BookController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploadController;

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


Route::get('/add-employee',[EmployeeController::class, 'addEmployee']);

Route::post('/add-employee',[EmployeeController::class, 'storeEmployee'])->name('employee.store');

Route::get('/all-employee',[EmployeeController::class, 'employees'])->name('employees');

Route::get('/edit-employee/{id}',[EmployeeController::class, 'editEmployee']);

Route::post('/update-employee',[EmployeeController::class, 'updateEmployee'])->name('employee.update');

Route::get('/send-email',[MailController::class,'sendEmail'])->name('send-email');

Route::get("{locale}/service",[ServiceController::class, 'service']);

Route::view('upload','upload');
Route::post('upload',[UploadController::class, 'index'])->name('upload');


