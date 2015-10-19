<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\HolaMon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', "HolaMonController@hello");

Route::resource('user', 'UserController');

Route::get('/prova1', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/prova2', function () {
    $content = '<h1>Hello world </h1>';
    $status = 200;
    $contentType = "text/html";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('/prova3', function () {
    $content = '<h1>Hello world </h1>';
    $status = 200;
    $contentType = "application/pdf";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('/prova4', function () {
    $content = '<h1>Hello world </h1>';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType)
        ->header('MyHeader', "HOLA");
});

Route::get('/prova5', function () {
    $pathToFile = public_path('prova.pdf');

    return response()->download($pathToFile);
});

Route::get('/prova6', function () {
    return response()->json([
        'name' => 'Abigali', 'state' => 'CA'
    ]);
});

Route::get('/prova7', function () {
    return [
        'name' => 'Abigali', 'state' => 'CA'
    ];
});