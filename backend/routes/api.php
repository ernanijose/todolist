<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('register', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::post('login', 'App\Http\Controllers\UserController@login')->name('users.login');

Route::group(['prefix' => 'v1', 'middleware' => 'jwt.verify'],function () {
    Route::apiResources([
        'tasklist'  =>  'App\Http\Controllers\TaskListController',
        'tasks'     => 'App\Http\Controllers\TasksController',
    ]);

    Route::put('task/close/{id}', 'App\Http\Controllers\TasksController@closeTask')->name('tasks.closeTask');

    Route::get('list/tasks/{id}', 'App\Http\Controllers\TasksController@tasksByList')->name('tasks.tasksByList');
    
    Route::post('completedTaskList', 'App\Http\Controllers\TaskListController@completedTaskList')->name('tasklist.completedTaskList');
      
    Route::post('logout', 'App\Http\Controllers\UserController@logout')->name('users.logout');
});