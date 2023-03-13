<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\programController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\contactusController;
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

Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });
    

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//home
Route::get('/home', [HomeController::class, 'home']);

//product
Route::prefix('product')->group(function () {
    Route::get('/Games', [productController::class, 'product']);
    // Route::get('/Games1', [ProductsController::class, 'product1']);
});

//news
Route::get('/news/{id?}', [newsController::class, 'news']);

//program
Route::prefix('program')->group(function(){
    Route::get('/',[programController::class, 'program']);
    Route::get('/Karir', function(){
        return redirect('https://www.educastudio.com/program/Karir');
    });
    Route::get('/Magang', function(){
        return redirect('https://www.educastudio.com/program/Magang');
    });

    Route::get('/Kunjungan Industri', function(){
        return redirect('https://www.educastudio.com/program/Kunjungan Industri');
    });
});

//AboutUs
Route::get('/aboutus',[aboutusController::class, 'aboutus']);

//Contact Us
Route::get('/contactus',[contactusController::class, 'contactus']);
