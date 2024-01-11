<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProjectController;





Auth::routes();


//home routes
Route::get('/', [ProjectController::class, 'getall'])->name('home');
Route::post('/showAppointment', [ProjectController::class, 'showAppointment'])->name('appointment.project')->middleware('auth');
Route::post('/bookAppointment', [ProjectController::class, 'bookAppointment'])->middleware('auth');
Route::get('/myBookings',[ProjectController::class,'myBookings'])->name('myBookings')->middleware('auth');
Route::get('/redirect',[ProjectController::class,'redirect'])->name('redirect')->middleware('auth');

//dashboard departments routes
Route::get('/showdepartments',[AdminController::class,'showDepartments'])->name('showdepartments');
Route::get('/adddepartments',[AdminController::class,'addDepartments'])->name('adddepartments');
Route::post('/storedepartment',[AdminController::class,'storeDepartment'])->name('storedepartment');
Route::get('/deletedepartments/{id}',[AdminController::class,'deleteDepartments'])->name('deletedepartments'); 

//dashboard appointment routes
Route::get('/showappointments',[AdminController::class,'showAppointments'])->name('showappointments');
Route::get('/addappointments',[AdminController::class,'addApointments'])->name('addapointments');
Route::post('/storeappointment',[AdminController::class,'storeAppointment'])->name('storeappointment');
Route::get('/deleteappointment/{id}',[AdminController::class,'deleteAppointment'])->name('deleteappointment'); 




//dashboard booking routes
Route::get('/showbooking',[AdminController::class,'showBooking'])->name('showbooking');
Route::get('/deletebooking/{id}',[AdminController::class,'deleteBooking'])->name('deletebooking');