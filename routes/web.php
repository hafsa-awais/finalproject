<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisteredPropertyController;
use App\Http\Controllers\TestController;

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
Route::get('/home', [RegisteredUserController::class, 'show'])->name('home');

Route::get('/registration', [RegisteredUserController::class, 'register']);
              
Route::post('/registration', [RegisteredUserController::class, 'register']);



Route::get('/', function () {
    return view('welcome');
});


Route::get('/body', function () {
    return view('bodycontent');
});

Route::get('/header', function () {
    return view('templates/headertemplate');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/footer', function () {
    return view('/mytemplatefooter');
});


Route::get('/description', function () {
    return view('/description');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/apitest', [TestController::class, 'test']);


require __DIR__.'/auth.php';
