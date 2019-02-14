<?php

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

Route::get('/', 'IndexController@index');

Route::get('/homepage.php', 'IndexController@index');

Route::get('/movies/list_of_movies.php', 'IndexController@movies');

Route::get('/movies/detail/venom', 'MovieController@detail');

Route::get('/continents/europe', 'ContinentController@Europe');