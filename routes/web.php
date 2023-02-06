<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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



Auth::routes();

Route::redirect('/', 'login');

/* Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']); */



// R del CRUD
Route::get('/home',[UserController::class,'redirectUsers'])->middleware('auth');
Route::get('/homeTeacher',[UserController::class,'index'])->name('home')->middleware('auth');
Route::get('/showUser/{id}',[UserController::class,'show'])->middleware('auth');
/* Route::get('/home', [UserController::class,'index'])->name('home')->middleware('auth'); */

// D del CRUD
Route::delete('/delete{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('isTeacher', 'auth');

// C del CRUD
Route::get('/create', [UserController::class, 'create']) ->name('createUser')->middleware('isTeacher', 'auth');
Route::post('/', [UserController::class, 'store']) ->name('storeUser')->middleware('isTeacher', 'auth');

// U del CRUD
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('editUser')->middleware('isTeacher', 'auth');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('isTeacher', 'auth');

//  SHOW
Route::get('/show/{id}', [UserController::class, 'show'])->name('showUser');


//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');





