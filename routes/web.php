<?php

use Illuminate\Support\Facades\Route;


use App\http\Controllers\Admin\{
    AdminController
};

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

Route::prefix("admin")->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
});


Route::get('/', function () {
    return view('welcome');
});
