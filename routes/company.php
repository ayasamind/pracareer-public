<?php

if (Config::get('app.env') !== 'local'){
    // asset()やurl()がhttpsで生成される
    URL::forceScheme('https');
}

Route::group(['prefix' => 'company', 'as' => 'company.', 'namespace' => 'Company'], function () {
    Route::get("/login", "Auth\LoginController@showLoginForm")->name('auth.login_form');
    Route::post("/login", "Auth\LoginController@login")->name('auth.login');
    Route::middleware('auth:company')->group(function () {
        Route::resource('posts', 'PostController');
        Route::get('/company', 'CompanyController@show')->name('company.show');
        Route::get('/company/edit', 'CompanyController@edit')->name('company.edit');
        Route::patch('/company/update', 'CompanyController@update')->name('company.update');
        Route::post("/logout", "Auth\LoginController@logout")->name('auth.logout');
        Route::resource('student_requests', 'StudentRequestController', ['only' => ['index', 'show']]);
        Route::patch('student_requests/approve/{id}', 'StudentRequestController@approve')->name('student_requests.approve');
        Route::get('/changePassword', "CompanyController@changePassword")->name('changePassword');
        Route::patch('/updatePassword', "CompanyController@updatePassword")->name('updatePassword');
        Route::get('/students', 'StudentController@index')->name('students.index');
        Route::get('/students/{id}', 'StudentController@show')->name('students.show');
    });
});