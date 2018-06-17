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

// Route::get('/', function () 
// {
//     return view('welcome');
// });

Route::group(['middleware' => 'guest'], function() 
{
    Route::get('/login', 'Auth\RegisterController@showRegistrationForm');
    // Route::get('/login', function()
    // {
    // phpinfo();
    // });
    //Route::post('/', 'Auth\RegisterController@register');
    // Route::post('/send-info', function()
    // {
        
    //     if (isset($_POST['register']))
    //     {
    //         dd('register');
    //         redirect('/send-register-form');
    //     }
    //     else if (isset($_POST['login']))
    //     {
    //         dd('login');
    //         redirect('/send-login-form');
    //     }
    // })->name('sendRegister');
//test
    Route::post('/send-register-form', 'Auth\RegisterController@register')->name('register');
    Route::post('/send-login-form', 'Auth\LoginController@login')->name('sendLogin');
    Route::get('/success', 'AccountController@success')->name('success');
});





Route::group(['middleware' => 'auth'], function() 
{
    //Route::get('/my/account', 'AccountController@index')->name('account');
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
