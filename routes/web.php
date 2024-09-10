<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodlistingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AcceptorController;


// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [MainController::class, 'index'])->name('home');

Route::post('/', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');




Route::get('/dashboard',   [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('AdminPanel')->group(function () {

    Route::get('/index', [FoodlistingController::class, 'index'])->name('listing.index');
    Route::get('/create', [FoodlistingController::class, 'create'])->name('listing.create');
    Route::post('/store', [FoodlistingController::class, 'store'])->name('listing.store');
    Route::get('{id}/edit', [FoodlistingController::class, 'edit'])->name('listing.edit');
    Route::get('/show', [FoodlistingController::class, 'show'])->name('listing.show');
    Route::post('{id}/update', [FoodlistingController::class, 'update'])->name('listing.update');
    Route::get('{id}/destroy', [FoodlistingController::class, 'destroy'])->name('listing.destroy');





    // Route::get('/index', 'FoodlistingController@index')->name('listing.index');
    // Route::get('/create', 'FoodlistingController@create')->name('listing.create');
    // Route::post('/store', 'FoodlistingController@store')->name('listing.store');
    // Route::get('/{id}/edit', 'FoodlistingController@edit')->name('listing.edit');
    // Route::post('{id}/update', 'FoodlistingController@update')->name('listing.update');
    // Route::get('{id}/destroy', 'FoodlistingController@destroy')->name('listing.destroy');

});


Route::get('/acceptor/creator', [AcceptorController::class, 'create'])->name('acceptor.create');
Route::post('/acceptor/store', [AcceptorController::class, 'store'])->name('acceptor.store');
Route::get('/acceptor/show', [AcceptorController::class, 'show'])->name('acceptor.show');



require __DIR__.'/auth.php';

