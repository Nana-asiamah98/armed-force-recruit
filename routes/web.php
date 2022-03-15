<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->name('dashboard');

Route::get('logout',[PagesController::class, 'Logout'])->name('logout');

//Route::resource('Pages',[PagesController::class]);
