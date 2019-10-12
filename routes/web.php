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

Route::get('/', 'MainController@index');

Route::get('/login', 'Auth\LoginController@index');
Route::post('/login/checklogin', 'Auth\LoginController@checklogin');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/course-search', 'CourseController@searchCourses');
Route::get('/popular-courses', 'CourseController@popularCourses');
Route::get('{institute}/{course}/peers', 'CourseController@showPeers');

Route::get('/institute-search', 'InstituteController@searchInstitutes');
Route::get('/{institute}', 'InstituteController@index');
Route::get('/{institute}/peers', 'InstituteController@peerindex');