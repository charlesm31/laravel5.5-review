<?php

/*--------------------------------------------------------------------------
PUBLIC ROUTES
--------------------------------------------------------------------------*/
Route::group(['middleware' => ['guest']], function () {

    // authentication routes
    Auth::routes();

    // welcome page
    Route::get('/', 'HomeController@index')->name('home');
    
});


/*-------------------------------------------------------------------------
RESTRICTED ROUTES
--------------------------------------------------------------------------*/
Route::group(['middleware' => ['auth']], function () {

    // Admin dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


    // Task
    Route::get('/tasks', 'TasksController@index')->name('dashboard');
    Route::get('/tasks/create', 'TasksController@create')->name('create.task.form');
    Route::post('/tasks', 'TasksController@store')->name('add.task');
    Route::get('/tasks/{task}', 'TasksController@show')->name('view.task');


    // Comment
    Route::post('/tasks/{task}/comments', 'CommentsController@store')->name('add.comment');
});
