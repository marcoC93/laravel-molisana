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

Route::get('/', function () {
    return view('home');
});
Route::get('/prodotti', function () {
    $data = [
        'formati' => config('pasta')
    ];
    
    return view('prodotti',$data);
})->name('pagina-prodotti');
Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
