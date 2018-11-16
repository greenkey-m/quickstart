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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wall', function () {
    $tasks = [
        'line 1',
        'line 2',
        'line 3'
    ];

    return view('wall', [
        'tasks' => $tasks,
        'name' => request('name'),
        'scripting' => '<script> alert(\'Dangerous!\'); </script>'
    ]);
});
