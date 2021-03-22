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

Route::get('list-user', 'UserController@listUser');

//GET
Route::get('users', 'Form\\TestController@listAllUsers')->name('users.listAllUsers');
Route::get('users/new', 'Form\\TestController@addUser')->name('users.addUser');
Route::get('users/edit/{user}', 'Form\\TestController@formEditUser')->name('users.formEditUser');
Route::get('users/{user}', 'Form\\TestController@listUsers')->name('users.listUsers');

//POST
Route::post('users/store', 'Form\\TestController@storeUser')->name('users.storeUser');

//PUT/PATH
Route::put('users/edit/{user}', 'Form\\TestController@editUser')->name('users.editUser');

//DELETE
Route::delete('users/delete/{user}', 'Form\\TestController@deleteUser')->name('users.deleteUser');
