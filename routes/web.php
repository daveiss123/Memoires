<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

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
Route::POST('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/layout', function () {
//     return view('layout\app');
// });
// Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Route::post('/login', 'AuthController@login');
// Route::post('/logout', 'AuthController@logout')->name('logout');
// Route::get('/inscription', 'InscriptionController@register')->name('inscription');
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
//     Route::get('/admin/memoires', 'MemoireController@index')->name('admin.memoires.index');
//     Route::get('/admin/memoires/create', 'MemoireController@create')->name('admin.memoires.create');
//     Route::post('/admin/memoires', 'MemoireController@store')->name('admin.memoires.store');
//     Route::get('/admin/memoires/{memoire}/edit', 'MemoireController@edit')->name('admin.memoires.edit');
//     Route::put('/admin/memoires/{memoire}', 'MemoireController@update')->name('admin.memoires.update');
//     Route::delete('/admin/memoires/{memoire}', 'MemoireController@destroy')->name('admin.memoires.destroy');
//     Route::get('/student/dashboard', 'StudentController@index')->name('student.dashboard');
//     Route::get('/student/memoires', 'MemoireController@index')->name('student.memoires.index');
//     Route::get('/student/memoires/create', 'MemoireController@create')->name('student.memoires.create');
//     Route::post('/student/memoires', 'MemoireController@store')->name('student.memoires.store');

//     Route::get('/memoires/{memoire}', 'MemoireController@show')->name('memoires.show');
// });



