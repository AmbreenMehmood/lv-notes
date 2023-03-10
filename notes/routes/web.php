<?php

use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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
Route::get('/create',[NotesController::class,'create']);
Route::get('list',[NotesController::class,'list']);
Route::get('/get',[NotesController::class,'getHome']);
Route::post('add',[NotesController::class,'add'])->name('add');
Route::get('delete/{id}',[NotesController::class,'delete']);
Route::get('edit/{id}',[NotesController::class,'edit']);
Route::post('edit',[NotesController::class,'update']);

Route::get('user',[UserController::class,'signup']);
Route::post('signup',[UserController::class,'postsignup'])->name('signup');
Route::get('login',[UserController::class,'login']);
Route::post('login2',[UserController::class,'login2'])->name('login2');
Route::get('/logout',[UserController::class,'logout']);

Route::get('/cart',[ProductsController::class,'cart']);





