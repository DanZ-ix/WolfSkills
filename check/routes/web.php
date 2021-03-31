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

Route::get('/', function () {return view('home');})->name('home');

/*пишите неймы для роутов, ->name('home')
что бы потом на фронте, писать в <a href="ссылка">
не тупо адрес, а указание на роут {{route('home')}}

т.е:
<a href="{{route('home')}}"> и оно само будет ставить ссылку, даже если её тут поменяют

*/

Route::get('/about', function () {return view('about');})->name('about');

Route::get('/login', function () {return view('login');})->name('login');

Route::get('/contacts', function () {return view('contacts');})->name('contacts');

Route::get('/profile', function () {return view('profile');})->name('profile');

Route::name('user.')->group(function()
{
    Route::view('/lk', 'lk')->middleware('auth')->name('lk');

    Route::get('/loginCH', function()
    {
        if (Auth::check())
        {
            return redirect(route('lk'));
        }
        return view('loginCH');
    })->name('login_check');

    //Route::post('/loginCH', []);

    //Route::get('/logout', [])->name('logout');

    Route::get('/register', function()
    {
        if (Auth::check())
        {
            return redirect(route('lk'));
        }
        return view('register');
    })->name('register');

    //Route::post('/register', []);
});

