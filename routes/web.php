<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisteredPropertyController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PropertiesController::class, 'index'])->name('homepage');

Route::get('/descriptiondesk/{id}', [PropertiesController::class, 'show'])->name('descriptiondesk');


Route::get('/upload-file', [PropertiesController::class, 'upload_file']);
Route::post('/upload-file', [PropertiesController::class, 'upload_file_submit']);


Route::get('/provider/connect', function () {
    return view('provider.connect');
})->name('connect');

Route::get('/loginform', function () {
    return view('auth/login');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/description', [PropertiesController::class, 'show'])->name('description');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

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
