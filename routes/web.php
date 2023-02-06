<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\PersonClassController;
use App\Http\Controllers\InvitedController;



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

/** Routes For Store Home Page */
Route::get('/', function () {
    return redirect()->route('visaRes');
});
Route::get('/visaRes', [App\Http\Controllers\HomeController::class, 'visaRes'])->name('visaRes');
/********************************************************************************************************* */


/** Routes For User */
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/********************************************************************************************************* */


/** Routes For Admin */
Route::prefix('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin/home');
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin/login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin/login');
    Route::post('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin/logout');

    Route::middleware('auth:admin')->group(function () {
               route::resource('titles',TitleController::class);
               route::resource('personclasses',PersonClassController::class);
               route::resource('inviteds',InvitedController::class);
    });
});
/********************************************************************************************************* */
