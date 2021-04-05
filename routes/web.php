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

Route::get('/', 'Frontend\PageController@index');

Route::get('/who-we-are', 'Frontend\PageController@about');

Route::get('/features', 'Frontend\PageController@features');

Route::get('/resources', 'Frontend\PageController@resources');

Route::get('/contact-us', 'Frontend\PageController@contact');