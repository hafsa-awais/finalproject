<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
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

// Route::get('/', function () { return view('homepage');})->name('homepage');

Route::get('/', [PropertiesController::class, 'index'])->name('homepage');

Route::get('/provider/connect', function () {
    return view('provider.connect');
})->name('connect');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/useraccount', function () {
    return view('user-account');
});

Route::get('/provideraccount', function () {
    return view('provider-account');
});

Route::get('/registerform', function () {
    return view('auth/register');
});

Route::get('/loginform', function () {
    return view('auth/login');
});

Route::get('/contactform', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// property category pages
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/wedding', [PropertiesController::class, 'get_data_wedding'])->name('wedding');

    Route::get('/birthday', [PropertiesController::class, 'get_data_birthday'])->name('birthday');

    Route::get('/photoshoot', [PropertiesController::class, 'get_data_photoshoot'])->name('photoshoot');

    Route::get('/photography', [PropertiesController::class, 'get_data_photography'])->name('photography');

    Route::get('/music', [PropertiesController::class, 'get_data_music'])->name('music');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/settings.php';
require __DIR__ . '/provider.php';
