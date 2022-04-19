<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index'])->name('index');

Route::get('sensitivePage',[HomeController::class, 'sensitive']);//->middleware('age');

Route::get('token',[HomeController::class,'token'])->name('token');

Route::post('post',[HomeController::class,'store'])->name('store');

Route::put('put/{id}',[HomeController::class, 'update'])->name('update');

Route::delete('delete/{id}', [HomeController::class, 'destroy'])->name('destroy');

Route::patch('patch/{id}',[HomeController::class, 'edit'])->name('edit');