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
    return view('welcome');
});

// Router For Patient
Route::prefix('patient')->group(function () {
    Route::get('/', 'homeController@patientHome')->name('patientHome');    
});


// Route::group(['middleware' => 'role:super-admin'], function() {
// });