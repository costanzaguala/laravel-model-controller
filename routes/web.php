<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\MovieController;


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

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
 

