<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

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



// Route::get('/musicdetails', function () {
//     return view('musicshow');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('music' , MusicController::class);
Route::resource('create' , MusicController::class);
Route::resource('edit' , MusicController::class);


Route::get('home' , [MusicController::class, 'index']);

Route::get('musicshow' , [MusicController::class, 'show']);

Route::get('create' , [MusicController::class, 'store']);

Route::get('edit' , [MusicController::class, 'update']);
