<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

Route::get('/', static function () {
        return view('welcome');
});

Route::get('/{page}', static function ($page) {
    if(View::exists($page)){
        return view($page);
    }
});
