<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ValidateformController;
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

// R del CRUD
Route::get('/home',[UserController::class,'redirectUsers'])->middleware('auth');
Route::get('/homeTeacher',[UserController::class,'index'])->name('home')->middleware('isTeacher', 'auth');

// D del CRUD
Route::delete('/delete{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('isTeacher', 'auth');

// C del CRUD
Route::get('/create', [UserController::class, 'create']) ->name('createUser')->middleware('isTeacher', 'auth');
Route::post('/', [UserController::class, 'store']) ->name('storeUser')->middleware('isTeacher', 'auth');

// U del CRUD
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('editUser')->middleware('isTeacher', 'auth');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('isTeacher', 'auth');

//  SHOW
Route::get('/readUserGrade/{id}',[UserController::class,'show'])->name('readUserGrade')->middleware('auth');

//Validation
Route::post('/save', [ValidateformController::class, 'saveDataForm']);

//CRUD GRADES

//C
Route::get('/grades/create/{id}', [GradeController::class, 'create']) ->name('createGrade')->middleware('isTeacher', 'auth');
Route::post('/grades/store/{id}', [GradeController::class, 'store']) ->name('storeGrade')->middleware('isTeacher', 'auth');


/* //U
Route::get('/edit/{id}', [GradeController::class, 'edit'])->name('editGrade')->middleware('isTeacher', 'auth');
Route::patch('/grade/{id}', [GradeController::class, 'update'])->name('updateGrade')->middleware('isTeacher', 'auth');

// D del CRUD
Route::delete('/delete{id}', [GradeController::class, 'destroy'])->name('deleteGrade')->middleware('isTeacher', 'auth');
 */