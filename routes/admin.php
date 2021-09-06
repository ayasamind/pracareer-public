<?php

if (Config::get('app.env') !== 'local'){
    URL::forceScheme('https');
}

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get("/login", "Auth\LoginController@showLoginForm")->name('auth.login_form');
    Route::post("/login", "Auth\LoginController@login")->name('auth.login');
    Route::middleware('auth:admin')->group(function () {
        Route::resource('admins', 'AdminController');
        Route::resource('companies', 'CompanyController');
        Route::post('companies/changeStatus/{companyId}', 'CompanyController@changeStatus')->name('companies.changeStatus');
        Route::get('companies/passwordReset/{id}', 'CompanyController@passwordReset')->name('companies.password_reset');
        Route::resource('students', 'StudentController');
        Route::post("/logout", "Auth\LoginController@logout")->name('auth.logout');
        Route::resource('posts', 'PostController', ['only' => ['index', 'show']]);
        Route::resource('student_requests', 'StudentRequestController', ['only' => ['index', 'show']]);
        Route::resource('post_templates', 'PostTemplateController');
    });
});