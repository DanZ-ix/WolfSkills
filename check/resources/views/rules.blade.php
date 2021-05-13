@extends("layouts.app")


@section('title')
    Правила
@endsection

@section('content')

<div style="background-color:#B8EBE2;">
  <br>
    <h2 style="text-align: center;">Политика конфиденциальности</h2>
    <br>
    </div>
    <br>
    <h4 style="padding: 20px;">Политика конфиденциальности персональных данных (далее — Политика) действует в отношении всей информации, которую Администрация Сайта может получить о Пользователе во время использования им Сайта, а также в ходе исполнения Администрацией Сайта любых соглашений и договоров с Пользователем.</h4>

<h4 style="padding: 20px;">С политикой конфиденциальности и пользовательским соглашением вы можете ознакомиться ниже.</h4>
<div class="col">
    <div class="col">
    <img src="content\images\profiles\pdf.png">
    </div>
    <div class="col">
    <a href = "{{route('RulesFile')}}" style="text-align: center;">Скачать правила</a>
    </div>
  </div>
    
@endsection
