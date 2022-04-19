<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Returning here csrf token needed for POST, PUT, PATCH and DELETE request
Route::get('/token', function(){
    return csrf_token();
})->name('token');

Route::post('post', function (Request $request) {
    $param1 =  $request->input('param1');
    $param2 =  $request->input('param2');

    return $param1." ".$param2;
})->name('post');

Route::put('put/{id}', function (Request $request,$id) {
    $param1 = $request->get('param1');

    return "Updating resource with id = ".$id." with new value: ".$param1;
})->name('put');

Route::delete('delete/{id}', function($id){
    return "Deleted resource with id: ".$id;
})->name('delete');

Route::patch('patch/{id}', function(Request $request,$id){
    $param1 = $request->get("param1");
    return "Patching param1 with value: ".$param1;
})->name('patch');