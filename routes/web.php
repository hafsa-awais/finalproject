<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Auth\RegisteredUserController;
=======
use App\Http\Controllers\TestController;
>>>>>>> MapsApi

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
Route::get('/home', [RegisteredUserController::class, 'show'])
                ->name('home');

Route::get('/registration', [RegisteredUserController::class, 'register']);
              
Route::post('/registration', [RegisteredUserController::class, 'register']);
                

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
Route::get('/apitest', [TestController::class, 'test']);


require __DIR__.'/auth.php';
>>>>>>> MapsApi
