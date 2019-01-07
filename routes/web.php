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

Route::get('/api/users', function () {
    return response()->json([
        [
            'name' => '1',
            'email' => 'First'
        ],
        [
            'name' => '2',
            'email' => 'Second'
        ],
        [
            'name' => '3',
            'email' => 'Third'
        ],
        [
            'name' => '4',
            'email' => 'Fourth'
        ],
    ]);
});
Route::post('/send-user', 'SpaController@post');
Route::get('/users', 'SpaController@get');
Route::get('/users-delete', 'SpaController@deleteAll');
Route::get('/abc', 'SpaController@abc');

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
