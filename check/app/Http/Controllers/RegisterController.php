<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Foundation\Auth\User;


class RegisterController extends Controller
{
    public function save(Request $request)
    {

        if (Auth::check())
        {
            return redirect()->to(route('user.lk'));
        }

        $validateFields = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required'
            ]);

        $user = User::create($validateFields);
        if ($user)
        {
            Auth::login($user);
            return redirect()->to(route('user.lk'));
        }
        return redirect()->to(route('login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
