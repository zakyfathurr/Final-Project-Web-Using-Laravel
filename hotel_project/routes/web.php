<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

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

route::get('/',[AdminController::class,'home']);

route::get('/home',[AdminController::class,'index'])->name('home');
route::get('/logout',[AdminController::class,'perform'])->name('logout');
route::get('/create_room',[AdminController::class,'create_room']);


route::get('//home_user',[AdminController::class,'index_home'])->name('home_user');


route::Post('/add_room',[AdminController::class,'add_room']);
route::get('/view_room',[AdminController::class,'view_room']);
route::get('/delete_room/{id}',[AdminController::class,'delete_room']);//kiri url kanan function admin controller
route::post('/edit_room/{id}',[AdminController::class,'edit_room']);
route::get('/update_room/{id}',[AdminController::class,'update_room']);

route::get('/room_details/{id}',[HomeController::class,'room_details']);

route::post('/add_booking/{id}',[HomeController::class,'add_booking']);

route::get('/booking_data',[AdminController::class,'booking_data']);

route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);

Route::get('/room_pdf',[AdminController::class,'cetak_pdf'] );