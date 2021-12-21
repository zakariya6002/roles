<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\roles\RolesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects',[Homecontroller::class,'index']);

Route::POST('/addmanager',[Homecontroller::class,'addmanager'])->name('addmanager');
Route::resource('roles',RolesController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Homecontroller::class,'index'])->name('dashboard');
 