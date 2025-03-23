<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentsController;


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

// Route::get('fakeData', function(){
//  User::factory(5000)->create();
// });

Route::get('dashboard',[AdminController::class,'dashbardHome'])->name('dashboard');
Route::get("/appointments",[AppointmentsController::class,"index"])->name("appointments.index");





