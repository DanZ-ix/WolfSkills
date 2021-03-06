<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @yield('meta')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> <!-- корневой файл app css -->
    <link rel="stylesheet" href= "{{ asset('/css/bootstrap.css') }}"> <!-- для работы бутстрапа -->
    <link rel="stylesheet" href= "{{ asset('/css/main.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script> <!-- корневой файл app js -->
    <script src="{{ asset('/js/bootstrap.js') }}"></script> <!-- бутстраповский джиэс -->
    <title>@yield('title')</title>
    <style>@yield('style')</style>
</head>
<body style="
            background-image: url('{{ asset('content/images/profiles/fon2.svg') }}');

            background-size: cover;
            background-repeat: no-repeat;
          ">
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 150px; background-color:#ceffff;">
    
        <a class="navbar-brand" href="#"><h1><img src="{{Asset('content\images\profiles\volk.png')}}" style=  "vertical-align: middle; width:110px; height:60px;"><img src="{{Asset('content\images\profiles\wolf.svg')}}" style=  "vertical-align: middle; width:250px; height:170px;"></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{route('home')}}"><h5>Главная</h5><span class="sr-only">(current)</span></a>


                <a class="nav-item nav-link" href="{{route('rules')}}"><h5>Правила</h5></a>

                @if(\Illuminate\Support\Facades\Auth::check())
                    @php
                        $user = \Illuminate\Support\Facades\Auth::user();

                        if ($user['role'] == 'Zakaz')
                            $Zakaz = True;
                        else
                            $Zakaz = False;
                    @endphp

                    @if($Zakaz)
                        <a class="nav-item nav-link" href="{{route('order')}}"><h5>Разместить заказ</h5></a>
                    @endif


                    <a class="nav-item nav-link" href="{{route('user.lk')}}"><h5>Личный кабинет</h5></a>
                    <a class="nav-item nav-link" href="{{route('order_list')}}"><h5>Заказы</h5></a>
                    <a class="nav-item nav-link navbar-toggler-right" href="{{route('user.logout')}}" ><h5 >Выйти</h5></a>
                @else
                    <a class="nav-item nav-link" href="{{route('user.login')}}"><h5>Логин</h5></a>
                    <a class="nav-item nav-link" href="{{route('user.register')}}"><h5>Регистрация</h5></a>
                @endif
            </div>
        </div>
    </nav>

</header>



                        <section style="width: 75%; margin-left: auto; margin-right: auto; padding: 10px;
                          background-color: rgba(255, 255, 255, 0.7);


                          background-size: cover;
                          background-repeat: repeat-y;
                          background-attachment: fixed;
                            Overflow:hidden;
                        ">

                        @yield('content')
                        </section>


</body>
</html>
