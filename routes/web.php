<?php

use App\Http\Controllers\MainCotroller;
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

// index
Route::get('/', [MainCotroller::class, 'home'])
    ->name('home');

// show
Route::get('/person/show/{person}', [MainCotroller::class, 'show'])
    ->name('person.show');

// delete
Route::get('/person/delete/{person}', [MainCotroller::class, 'delete'])
    ->name('person.delete');
