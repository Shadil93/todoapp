<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/create',[HomeController::class,'create'])->name('create');
Route::post('/do_register',[HomeController::class,'do_register'])->name('do_register');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/show{id}',[HomeController::class,'show'])->name('show');
Route::get('/delete{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/update/{id}',[HomeController::class,'update'])->name('update');

