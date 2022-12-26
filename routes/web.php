<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\BiografiController;
use App\Http\Controllers\PortofolioController;

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

// halaman utama
Route::get('/', function () {
    return view('home.home');
});

// preview template
Route::get('/template1',function (){
    return view('template.index');
});

// auth
Route::get('/login',[authController::class,'login']);
Route::post('/login',[authController::class,'login_action']);
Route::get('/register',[authController::class,'register']);
Route::post('/register',[authController::class,'register_action']);
Route::get('/logout',[authController::class,'logout']);

Route::get('/template',[PortofolioController::class,'template']);

// menu biodata
Route::get('/biodata',[PortofolioController::class,'index'])->middleware('auth');
Route::post('/create-template',[PortofolioController::class,'store'])->middleware('auth');
Route::post('/edit-template',[PortofolioController::class,'edit'])->middleware('auth');
Route::get('portofolio/{user:username}',[PortofolioController::class,'show'])->middleware('auth');
// Route::get('portofolio/{id}',[PortofolioController::class,'show']);
// Route::get('portofolio-delete/{id}',[PortofolioController::class,'destroy']);

// menu sekolah
Route::get('/sekolah',[SekolahController::class,'index'])->middleware('auth');
Route::post('/create-sekolah',[SekolahController::class,'store'])->middleware('auth');
Route::post('/edit-sekolah',[SekolahController::class,'edit'])->middleware('auth');

// menu project
Route::get('/project',[ProjectController::class,'index'])->middleware('auth');
Route::post('/create-project',[ProjectController::class,'store'])->middleware('auth');
Route::post('/edit-project/{id}',[ProjectController::class,'edit'])->middleware('auth');
Route::get('/delete-project/{id}',[ProjectController::class,'destroy'])->middleware('auth');

// menu project
Route::get('/biografi',[BiografiController::class,'index'])->middleware('auth');
Route::post('/create-biografi',[BiografiController::class,'store'])->middleware('auth');
Route::post('/edit-biografi',[BiografiController::class,'edit'])->middleware('auth');




