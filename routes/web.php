<?php

use App\Http\Controllers\HomesteadConfigController;
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

Route::resource( '/config',  HomesteadConfigController::class );

//Route::get('/config/{key}/edit', 'HomesteadConfigController@edit')->name('config.edit');
//Route::put('/config/{key}', 'HomesteadConfigController@update')->name('config.update');
