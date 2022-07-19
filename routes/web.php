<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SnippetController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('files',FileController::class);
Route::resource('links',LinkController::class);
Route::resource('snippets',SnippetController::class);