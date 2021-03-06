<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// siswa
$router->get('student', 'StudentsController@index');
$router->post('/student/store', 'StudentsController@store');
$router->get('/student/get/{id}', 'StudentsController@show');
$router->put('/student/update/{id}', 'StudentsController@update');
$router->delete('/student/delete/{id}', 'StudentsController@destroy');

// kelas
$router->get('kelas', 'KelassesController@index');
$router->post('/kelas/store', 'KelassesController@store');
$router->get('/kelas/get/{id}', 'KelassesController@show');
$router->put('/kelas/update/{id}', 'KelassesController@update');
$router->delete('/kelas/delete/{id}', 'KelassesController@destroy');

// Extracurricular
$router->get('excul', 'ExtracurricularsController@index');
$router->post('/excul/store', 'ExtracurricularsController@store');
$router->get('/excul/get/{id}', 'ExtracurricularsController@show');
$router->put('/excul/update/{id}', 'ExtracurricularsController@update');
$router->delete('/excul/delete/{id}', 'ExtracurricularsController@destroy');

// Konseling
$router->get('bk', 'KonselingController@index');
$router->post('/bk/store', 'KonselingController@store');
$router->get('/bk/get/{id}', 'KonselingController@show');
$router->put('/bk/update/{id}', 'KonselingController@update');
$router->delete('/bk/delete/{id}', 'KonselingController@destroy');
