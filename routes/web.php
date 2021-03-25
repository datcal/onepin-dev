<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LinkController;


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

Route::get('/', function () {
    return view('site.pages.home');
});

Route::get('/dashboard', [LinkController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/link', [LinkController::class, 'link'])
                ->middleware(['auth'])->name('link');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/link', function () {
    return view('link');
})->middleware(['auth'])->name('link');
*/

require __DIR__.'/auth.php';

Route::get('/{username}', [MainController::class, 'index'])
                ->name('main');
