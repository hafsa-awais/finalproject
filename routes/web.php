<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisteredPropertyController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;

use Illuminate\Http\Request;
use App\Models\Properties;



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

// single property pages (description)
Route::get('/descriptiondesk/{id}', [PropertiesController::class, 'show'])->name('descriptiondesk');
Route::get('/description', [PropertiesController::class, 'show'])->name('description');

// upload file
Route::get('/upload-file', [PropertiesController::class, 'upload_file']);
Route::post('/upload-file', [PropertiesController::class, 'upload_file_submit']);

// landing page for provider
Route::get('/provider/connect', function () {
    return view('provider.connect');
})->name('connect');

// about us page
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// search
// Route::get('/search', [PropertiesController::class, 'search'])->name('search');
// Route::get('/search', [SearchController::class, 'index']);
// Route::get('/1', [SearchController::class, 'index']);
// Route::get('/search', [SearchController::class, 'search']);


// contact form pages
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact');
    Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');
});

// dashboard (user & provider profile pages)
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



