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

if (Config::get('app.env') !== 'local'){
    URL::forceScheme('https');
}

Route::get("/", 'HomeController@top')->name('top')->middleware('guest:student');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/policy', 'HomeController@policy')->name('policy');

Route::prefix('student')->namespace('Student')->name('student.')->group(function () {
    Route::middleware('guest:student')->group(function () {
        Route::get("/register_list", "Auth\RegisterController@showRegistrationList")->name('auth.register_list');
        Route::get("/register", "Auth\RegisterController@showRegistrationForm")->name('auth.register_form');
        Route::post("/register", "Auth\RegisterController@register")->name('auth.register');
        Route::get('/register_first', "Auth\RegisterController@show_register_first")->name('auth.show_register_first');
        Route::post("/register_first", "Auth\RegisterController@register_first")->name('auth.register_first');
        Route::post("/register_second", "Auth\RegisterController@register_second")->name('auth.register_second');
        Route::get("/register_second", "Auth\RegisterController@show_register_second")->name('auth.show_register_second');
        Route::post("/register_third", "Auth\RegisterController@register_third")->name('auth.register_third');
        Route::get("/register_third", "Auth\RegisterController@show_register_third")->name('auth.show_register_third');
        Route::post("/register_finish", "Auth\RegisterController@register_finish")->name('auth.register_finish');
        Route::get("/login", "Auth\LoginController@showLoginForm")->name('auth.login_form');
        Route::post("/login", "Auth\LoginController@login")->name('auth.login');
        Route::get("/mail_send", "Auth\RegisterController@mailSend")->name('auth.mail_send');
        Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
        Route::get('/email/resend', 'Auth\VerificationController@resend_form')->name('verification.resend');
        Route::post('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
        // ログインURL
        Route::get('/twitter', 'Auth\RegisterController@redirectToTwitterProvider')->name('auth.twitter');
        Route::get('/line', 'Auth\RegisterController@redirectToLineProvider')->name('auth.line');
        Route::get('/facebook', 'Auth\RegisterController@redirectToFacebookProvider')->name('auth.facebook');
        // コールバックURL
        Route::get('/twitter/callback', 'Auth\RegisterController@handleTwitterProviderCallback');
        Route::get('/line/callback', 'Auth\RegisterController@handleLineProviderCallback');
        Route::get('/facebook/callback', 'Auth\RegisterController@handleFacebookProviderCallback');
    });
    Route::middleware('auth:student')->group(function () {
        Route::get('/mypage', "StudentController@mypage")->name('mypage');
        Route::get('/mypage/edit', "StudentController@edit")->name('mypage.edit');
        Route::patch('/mypage/update', "StudentController@update")->name('mypage.update');
        Route::get("/favorites", "PostController@favorites")->name('posts.favorites');
        Route::get('/account', "StudentController@account")->name('account');
        Route::get('/account/edit', "StudentController@editAccount")->name('editAccount');
        Route::patch('/account/update', "StudentController@updateAccount")->name('updateAccount');
        Route::post("/logout", "Auth\LoginController@logout")->name('auth.logout');
        Route::post("/favorite", "StudentFavoriteController@favorite")->name('favorite');
        Route::post("/deleteFavorite", "StudentFavoriteController@delete")->name('deleteFavo');
        Route::post("/request", "StudentRequestController@create")->name('request');
        Route::get('/requests', "StudentRequestController@index")->name('requests');
        Route::get('/changePassword', "StudentController@changePassword")->name('changePassword');
        Route::patch('/updatePassword', "StudentController@updatePassword")->name('updatePassword');
    });
    Route::resource('posts', 'PostController', ['only' => ['index', 'show']]);
});
Route::get('/email/verify/{id}/{hash}', 'Student\Auth\VerificationController@verify')->name('verification.verify');
Route::get('/email/show', 'Student\Auth\VerificationController@show')->name('verification.notice')->middleware(['web','auth:student']);