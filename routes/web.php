<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisteredPropertyController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Auth\RegisteredProviderController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlewa
re group. Now create something great!
|
*/
Route::get('/', [PropertiesController::class, 'index'])->name('homepage');
Route::get('/wedding', [PropertiesController::class, 'get_data_wedding'])->name('wedding');

Route::get('/birthday', [PropertiesController::class, 'get_data_birthday'])->name('birthday');

Route::get('/photoshoot', [PropertiesController::class, 'get_data_photoshoot'])->name('photoshoot');

Route::get('/photography', [PropertiesController::class, 'get_data_photography'])->name('photography');

Route::get('/music', [PropertiesController::class, 'get_data_music'])->name('music');


Route::get('property/{id}', [PropertiesController::class, 'show'])->name('property');


Route::get('provider-account', [RegisteredProviderController::class, 'show']);


Route::get('/registration', [RegisteredUserController::class, 'register']);
              
Route::post('/registration', [RegisteredUserController::class, 'register']);




Route::get('/', [PropertiesController::class, 'index'])->name('homepage');

Route::get('/descriptiondesk/{id}', [PropertiesController::class, 'show'])->name('descriptiondesk');


Route::get('/upload-file', [PropertiesController::class, 'upload_file']);
Route::post('/upload-file', [PropertiesController::class, 'upload_file_submit']);


Route::get('/search', [PropertiesController::class, 'search'])->name('search');


Route::get('/provider/connect', function () {
    return view('provider.connect');
})->name('connect');

Route::get('/loginform', function () {
    return view('auth/login');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/descriptionmobi', function () {
    return view('descriptionmobi');
});

Route::get('/registerproperty', function () {
    return view('register-property');
});

Route::get('/description', function () {
    return view('/description');
});



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
