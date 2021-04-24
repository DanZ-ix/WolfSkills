<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('home');})->name('home');

/*пишите неймы для роутов, ->name('home')
что бы потом на фронте, писать в <a href="ссылка">
не тупо адрес, а указание на роут {{route('home')}}

т.е:
<a href="{{route('home')}}"> и оно само будет ставить ссылку, даже если её тут поменяют

*/

Route::get('/about', function () {return view('about');})->name('about');

Route::get('/contacts', function () {return view('contacts');})->name('contacts');
Route::get('/rules', function () {return view('rules');})->name('rules');


//ЗАКАЗЫ
Route::get('/order_list', [\App\Http\Controllers\OrderController::class, 'GetOrders'])->middleware('auth')->name(('order_list'));
Route::get('/order', function () {return view('order');})->middleware('auth')->name(('order'));

//Route::get('/order_list', function () {return view('order_list');})->middleware('auth')->name(('order_list'));


Route::post('/order_submit', [\App\Http\Controllers\OrderController::class, 'submit'])->name('order_submit');

Route::get('/error',  function () {return view('error');})->name('error');

//РЕГИСТРАЦИЯ И ЛОГИН
Route::name('user.')->group(function()


{
    Route::post('/order_button_take', [\App\Http\Controllers\Button_orderController::class, 'submit'])->name('button_order_list');

    Route::view('/lk', 'profile')->middleware('auth')->name('lk');

    Route::get('/login', function()
    {
        if (Auth::check())
        {
            return redirect(route('user.lk'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

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
});

