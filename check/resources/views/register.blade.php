@extends("layouts.app")

@section('title')
    Регистарция
@endsection



@section('content')
<h1 style="text-align: center;">Регистрация</h1>

<form>
<h2 style="text-align: center;">
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Я заказчик
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off"> Я исполнитель
  </label>
</div>
</h2>
<div class="form-group">
    <label for="exampleInputNickname">Nickname</label>
    <input type="nickname" class="form-control" id="exampleInputNickname" aria-describedby="nicknameHelp" placeholder="Введите nickname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Электронная почта</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите e-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
  </div>
  <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection
