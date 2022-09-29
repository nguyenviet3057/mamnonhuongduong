<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return redirect()->route('home');
});

Route::get('/home', [MainController::class, 'home']) -> name('home');
Route::get('/schedule', [MainController::class, 'schedule']) -> name('schedule');
Route::get('/news', [MainController::class, 'news']) -> name('news');
