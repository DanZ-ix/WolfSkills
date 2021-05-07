<?php

use Illuminate\Support\Facades\Route;



//region Общие страницы
Route::get('/', function () {return view('home');})->name('home');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/contacts', function () {return view('contacts');})->name('contacts');
Route::get('/rules', function () {return view('rules');})->name('rules');
Route::get('/error',  function () {return view('error');})->name('error');
//endregion

//region orders
Route::get('/order_list', [\App\Http\Controllers\OrderController::class, 'GetOrders'])->middleware('auth')->name(('order_list'));
Route::get('/order', function () {return view('order');})->middleware('auth')->name(('order'));
Route::post('/order_submit', [\App\Http\Controllers\OrderController::class, 'submit'])->name('order_submit');
//endregion

//РЕГИСТРАЦИЯ И ЛОГИН
Route::name('user.')->group(function()
{
    //region order_buttons
    Route::post('/order_button_choose', [\App\Http\Controllers\Button_orderController::class, 'choose'])->name('button_order_choose');
    Route::post('/order_button_take', [\App\Http\Controllers\Button_orderController::class, 'submit'])->name('button_order_list');
    //endregion

    //region LoginRegister
    Route::get('/login', function()
    {
        if (Auth::check())
        {
            return redirect(route('user.lk'));
        }
        return view('login');
    })->name('login');

    Route::get('/logout', function()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    )->name('logout');


    Route::get('/register', function()
    {
        if (Auth::check())
        {
            return redirect(route('user.lk'));
        }
        return view('register');
    })->name('register');

    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'save']);
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
    //endregion

    //Личный кабинет
    Route::view('/lk', 'profile')->middleware('auth')->name('lk');

});

