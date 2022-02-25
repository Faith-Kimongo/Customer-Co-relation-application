<?php

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

Route::view('/', 'home');

Route::get('/contact-us', 'App\Http\Controllers\ContactFormController@create');

Route::post('/contact-us', 'App\Http\Controllers\ContactFormController@store');


Route::view('about', 'about');

// Route::view('contact-us', 'contact');



// Route::get('customers', 'App\Http\Controllers\CustomersController@index');
// Route::get('customers/create', 'App\Http\Controllers\CustomersController@create');
// Route::post('customers', 'App\Http\Controllers\CustomersController@store');
// Route::get('customers/{customer}', 'App\Http\Controllers\CustomersController@show');
// Route::get('customers/{customer}/edit', 'App\Http\Controllers\CustomersController@edit');
// Route::patch('customers/{customer}', 'App\Http\Controllers\CustomersController@update');
// Route::delete('customers/{customer}', '\CustomersController@destroy');


Route::resource('customers', 'App\Http\Controllers\CustomersController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
