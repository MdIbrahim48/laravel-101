<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
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

Route::resource('/',LoginController::class)->only(['index','store'])->middleware('guest');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/backend', function () {
    return view('backend.dashboard');
})->name('dashboard');

// Route::group(['prefix'=>'backend','middleware'=>['age:20,Md Ibrahim','imageCheck']],function(){
//     Route::get('/', function () {
//         return view('backend.dashboard');
//     })->name('dashboard');
//     Route::resource('/categories',CategoryController::class)->withoutMiddleware('imageCheck');
// });

// Route::group(['prefix'=>'backend','middleware'=>['customGroup']],function(){
//     Route::get('/', function () {
//         return view('backend.dashboard');
//     })->name('dashboard');
//     Route::resource('/categories',CategoryController::class);
// });

Route::group(['prefix'=>'backend','middleware'=>['auth']],function(){
    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    Route::resource('/categories',CategoryController::class);
});
