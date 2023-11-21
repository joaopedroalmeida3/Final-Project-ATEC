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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('pagina_principal');
});

Route::resource('/students' , 'StudentController');
Route::resource('/instructors' , 'InstructorController');
Route::resource('/categories' , 'CategoryController');
Route::resource('/vehicles' , 'VehicleController');
Route::resource('/lessons' , 'LessonController');
Route::get( '/students/estado/{id}', 'StudentController@estado' );
Route::get( '/students/unestado/{id}', 'StudentController@unestado' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
