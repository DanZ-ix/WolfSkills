<?php

//region imports
use App\Http\Controllers\Button_orderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
//endregion



//region Общие страницы
Route::get('/', function () {return view('home');})->name('home');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/contacts', function () {return view('contacts');})->name('contacts');
Route::get('/rules', function () {return view('rules');})->name('rules');
Route::get('/rules/download', function ()
{
   $file = public_path()."/rules.pdf";

   $headers = array('Content-Type: application/pdf',);

   return Response::download($file, "rules.pdf", $headers);
})->name("RulesFile");
Route::get('/error',  function () {return view('error');})->name('error');
//endregion

//region orders
Route::get('/order_list/all', [OrderController::class, 'GetOrders'])->middleware('auth')->name(('order_list'));
Route::get('/order_list/all/{napr}', [OrderController::class, 'GetOrdersNapr'])->middleware('auth')->name(('order_list_napr'));


Route::get('/order', function () {return view('order');})->middleware('auth')->name(('order'));
Route::post('/order_submit', [OrderController::class, 'submit'])->name('order_submit');
Route::get('/order_list/{id}', [OrderController::class, 'OneOrder'])->name('one_order');
//endregion

//РЕГИСТРАЦИЯ И ЛОГИН
Route::name('user.')->group(function()
{
    //region order_buttons
    Route::post('/order_button_choose', [Button_orderController::class, 'choose'])->name('button_order_choose');
    Route::post('/order_button_take', [Button_orderController::class, 'submit'])->name('button_order_list');
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

    Route::post('/register', [RegisterController::class, 'save']);
    Route::post('/login', [LoginController::class, 'login']);
    //endregion

    //Личный кабинет
    Route::view('/lk', 'profile')->middleware('auth')->name('lk');

});

