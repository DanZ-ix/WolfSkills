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
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">W<img src="content\images\profiles\tvoieblet.jpg" style=  "vertical-align: middle; border-radius: 20px; width:25px; height:100%;">LFSKILLS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('home')}}">Главная<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{route('contacts')}}">Контакты</a>
      <a class="nav-item nav-link" href="{{route('about')}}">О нас</a>
      <a class="nav-item nav-link" href="{{route('profile')}}">Личный кабинет</a>
      <a class="nav-item nav-link" href="{{route('login')}}">Логин</a>
      <a class="nav-item nav-link" href="{{route('user.register')}}">Регистрация</a>
    </div>
  </div>
</nav>
</header>
<section style="width: 75%; margin-left: auto; margin-right: auto;">
@yield('content')

</section>
</body>
</html>
