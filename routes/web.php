<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('main.index');
})->name('main');

Route::middleware(['middleware'=>'back'])->group(function (){
    Auth::routes([
        'register'=>false
    ]);
});

Route::group(['prefix'=>'dashboard','middleware'=>['auth','admin','back']], function (){
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'adminpanel'])->name('adminpanel');
    Route::get('/oldmessages', [\App\Http\Controllers\Admin\MessageController::class, 'oldmessage'])->name('oldmessage');
    Route::get('/oldmessages/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'old_show'])->name('old_show');
});
Route::get('/contact', [\App\Http\Controllers\Main\MainController::class, 'index'])->name('contact');
Route::get('/about', [\App\Http\Controllers\Main\MainController::class, 'about'])->name('about');
Route::get('/courses', [\App\Http\Controllers\Main\MainController::class, 'courses'])->name('courses');
Route::resource('/message', \App\Http\Controllers\Admin\MessageController::class);
