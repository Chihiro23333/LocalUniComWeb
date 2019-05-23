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

// 首页
Route::get('/', 'unicom\UnicomController@index');
Route::get('unicom', 'unicom\UnicomController@unicom');
Route::post('unicom/submit','unicom\UnicomController@submit');
Route::get('/task', 'TaskController@home');
Route::get('task/create', 'TaskController@create');
Route::post('task', 'TaskController@store');
Route::resource('post', 'PostController');

Route::get('task/{id}/delete', function ($id) {
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE"> 
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <button type="submit">删除任务</button>
            </form>';
});
Route::delete('task/{id}',function($id){
    return 'task delete'.$id;
})->name('task.delete');
