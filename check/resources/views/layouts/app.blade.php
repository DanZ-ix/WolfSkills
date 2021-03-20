<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> <!-- корневой файл app css -->
    <link rel="stylesheet" href= "{{ asset('/css/bootstrap.css') }}"> <!-- для работы бутстрапа -->
    <script src="{{ asset('/js/app.js') }}"></script> <!-- корневой файл app js -->
    <script src="{{ asset('/js/bootstrap.js') }}"></script> <!-- бутстраповский джиэс -->
    <title>@yield('title')</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WOLFSKILLS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home">Главная<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="contacts">Контакты</a>
      <a class="nav-item nav-link" href="#">О нас</a>
      <a class="nav-item nav-link" href="profile">Личный кабинет</a>
    </div>
  </div>
</nav>
</header>
@yield('content')

@include('inc.aside')
</body>
</html>
