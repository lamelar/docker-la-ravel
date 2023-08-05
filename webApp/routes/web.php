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

Route::get('/hecon', 'App\Http\Controllers\HelloController');

Route::post('/hecon', 'App\Http\Controllers\HelloController@post');

Route::get('hello/{msg}',function($msge){
    $html = <<<EOF
    <html><body>Hello!!!<p>{$msge}</p></body></html>
    EOF;

    return $html;
});

Route::get('/skill', 'App\Http\Controllers\SkillController@show');

Route::post('/skill', 'App\Http\Controllers\SkillController@post');

Route::get('/detail', 'App\Http\Controllers\SkillController@show_detail');

Route::get('/edit/{id}', 'App\Http\Controllers\SkillController@edit');

Route::post('/update', 'App\Http\Controllers\SkillController@update');

Route::post('/delete', 'App\Http\Controllers\SkillController@delete');

Route::post('/index', 'App\Http\Controllers\SkillController@index');