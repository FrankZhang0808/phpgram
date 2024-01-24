<?php

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

Route::get('/',[\App\Http\Controllers\PracticeController::class,'indexs']);
Route::get('/logina', function () {
    return view('login');
});
//register
Route::get('/register', function () {
    return view('register');
});
Route::post('add',[\App\Http\Controllers\UsersController::class,'add_user']);
//practice
Route::get('/practice', [\App\Http\Controllers\PracticeController::class,'list']);
Route::post('login',[\App\Http\Controllers\UsersController::class,'user_login']);
Route::get('/practice_add',function (){
   return view('practice_add');
});
//practice_add
Route::post('adds',[\App\Http\Controllers\PracticeController::class,'practice_add']);
Route::get('find',[\App\Http\Controllers\PracticeController::class,'practice_find']);
Route::post('update',[\App\Http\Controllers\PracticeController::class,'practice_update']);
