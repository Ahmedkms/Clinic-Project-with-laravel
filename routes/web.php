<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/app', function () {
//     return view('app');
// });
Route::get('/',function(){
    return view('index'); 
    })->name('index_page');
    

Route::get('index',function(){
return view('index');
})->name('index_page');

Route::get('index',[PageController::class, 'index'])->name('index_page');
Route::get('doctor-index',[PageController::class, 'doctor_index'])->name('doctor_index');
Route::get('booking',[PageController::class, 'booking'])->name('doctors-book');
Route::get('majors',[PageController::class, 'majors'])->name('majors');



Route::get('login', [PageController::class,'login']
)->name('login');
Route::get('register', [PageController::class,'register']
)->name('register');


Route::post('contactAction',[PageController::class,'contactAction'])->name('contacAction');
Route::get('contactView',[PageController::class,'contactView'])->name('contactView');


Route::get('newDoctor',[DoctorController::class,'filldataToDoctrosI']);

Route::post('addNewUser',[UserController::class,'addNewuser'])->name('addUser');







