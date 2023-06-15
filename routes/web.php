<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    

    Route::get('/contact', 'App\Http\Controllers\Visitor\ContactsController@contact')->name('contact');
    Route::get('/about', 'App\Http\Controllers\Visitor\AboutsController@about')->name('about');
    //

    Route::get('admin/users', 'App\Http\Controllers\Admin\BookController@index');
    Route::get('admin/books/create', 'App\Http\Controllers\Admin\BookController@create');
    Route::post('store', 'App\Http\Controllers\Admin\BookController@store');
    Route::delete('admin/books/{id}', 'App\Http\Controllers\Admin\BookController@delete');
    Route::get('admin/books/edit/{id}', 'App\Http\Controllers\Admin\BookController@edit');
    Route::put('admin/books/update/{id}', 'App\Http\Controllers\Admin\BookController@update');
    Route::get('admin/books/index', 'App\Http\Controllers\Admin\BookController@index')->name('admin/books/index');

});

Route::get('/', 'App\Http\Controllers\Visitor\HomeController@welcome')->name('welcome');
Route::get('/classes', 'App\Http\Controllers\Visitor\HomeController@classes')->name('classes');


Route::get('/view-details/{id}', 'App\Http\Controllers\Admin\DetailsController@details');
Route::get('/cart/{id}', 'App\Http\Controllers\Visitor\CartController@cart');
Route::Post('/cart/Buy/{id}', 'App\Http\Controllers\Visitor\CartController@pur');

require __DIR__.'/auth.php';




// Route::get('/books/{id}', 'App\Http\Controllers\Visitor\BookController@index');




// Route::get('/about', function () {

// return view('about');
// });

// Route::get('/contact', function () {

// return view('contact');
// });

