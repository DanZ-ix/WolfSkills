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
        //
        $validateFields = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required',
                'nickname' => 'required',
                'role' => 'required',
                'city' => 'required',
                'uni' => 'required',
                'direction' => 'required'
            ]);

        dd('kek');
        if(User::where('email', $validateFields['email'])->exists())
        {
            return redirect()->to(route('user.register'))->withErrors([
                'email' => 'Такой email уже используется']);
        }


        $user = User::create([
            'nickname' => $validateFields['nickname'],
            'email' => $validateFields['email'],
            'password' => $validateFields ['password'],
            'role' => $validateFields['role'],
            'city' => $validateFields['city'],
            'uni' => $validateFields['uni'],
            'direction' => $validateFields['direction'],
            'stars' => 0,
            'rating' => 0
            ]);
            //$validateFields);
        $users_all = User::all();


        if ($user)
        {
            Auth::login($user);
            return redirect()->to(route('user.lk'));
        }
        return redirect()->to(route('user.register'))->withErrors([
            'email' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
