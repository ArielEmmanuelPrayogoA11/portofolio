<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('home');
// });



// HOME
Route::get('/' , [HomeController::class,'__invoke']);




//SPM
Route::get('/spm' , [PasienController::class,'index']);
Route::post('/spm' , [PasienController::class,'store'])->middleware('auth');
Route::get('/spm/{nama}' , [PasienController::class,'show'])->middleware('auth');
Route::get('/spm/{nama}/{id}' , [PasienController::class,'detail'])->middleware('auth');




//QUEST //Nek gak auth maka kedirect ke login
Route::get('/quest' , [QuestController::class,'index']); 
Route::post('/quest' , [QuestController::class,'store'])->middleware('auth');
Route::get('/quest/{namaq}' , [QuestController::class,'show'])->middleware('auth');


//LOGOUT
Route::post('/logout' , [LogoutController::class,'__invoke'])->middleware('auth')->name('logout');


//Register //Middleware itu biar gak bisa kesitu nek dah login
Route::middleware('guest')->group(function(){

    Route::get('/register' , [RegisterController::class,'create'])->name('register');
    Route::post('/register' , [RegisterController::class,'store'])->name('register');
    
    Route::get('/login' , [LoginController::class,'create'])->name('login');
    Route::post('/login' , [LoginController::class,'store'])->name('login');
    
});

//Change Password
Route::get('/password/edit' , [PasswordController::class,'edit'])->name('password')->middleware('auth');
Route::put('/password/edit' , [PasswordController::class,'update'])->name('password')->middleware('auth');



