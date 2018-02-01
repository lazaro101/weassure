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

Route::get('/','WebController@Home');
Route::get('/Products','WebController@Products');
Route::get('/Gallery','WebController@Gallery');
Route::get('/Gallery/{id}',['uses' => 'WebController@GalleryPics']);
Route::get('/Updates','WebController@Updates');
Route::get('/About','WebController@About');

Route::get('/Login','WebController@Login');
Route::post('doLogin','WebController@doLogin');
Route::get('/Register','WebController@Register');

Route::get('/Admin','AdminController@Admin');
Route::post('/saveemp','AdminController@saveemp');
Route::get('/deleteemp/{id}',['uses' => 'AdminController@deleteemp']);

Route::get('/AdminUpdates','AdminController@Updates');
Route::post('/addPicnews','AdminController@addPicnews');
Route::post('/addPicprod','AdminController@addPicprod');
Route::post('/addPicachi','AdminController@addPicachi');

Route::get('/AdminGallery','AdminController@AdminGallery');
Route::get('/AdminGallery/{id}',['uses' => 'AdminController@AdminGalleryPics']);
Route::post('/addGallery','AdminController@addGallery');
Route::get('/getGallery','AdminController@getGallery');
Route::post('delGallery','AdminController@delGallery');
Route::post('editGallery','AdminController@editGallery');
Route::post('/addPhoto','AdminController@addPhoto');
Route::post('/delPhoto','AdminController@delPhoto');

Route::get('/logout', 'AdminController@logout');