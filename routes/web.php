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

    Route::get('/','WelcomeController@index');

// Authentication Routes...
      Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
      Route::post('login', 'Auth\LoginController@login');
      Route::post('logout', 'Auth\LoginController@logout');
     //
     // // Registration Routes...
     $this->get('register', 'Auth\RegisterController@showRegistrationForm');
     $this->post('register', 'Auth\RegisterController@register')->name('register');
     //
     // // Password Reset Routes...
     // $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
     // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
     // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
     // $this->post('password/reset', 'Auth\ResetPasswordController@reset');

     Route::get('videos','VideoController@index')->name('videos');
