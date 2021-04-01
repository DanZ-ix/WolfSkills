@extends("layouts.app")

@section('title')
    Регистарция
@endsection



@section('content')
<h1 style="text-align: center;">Регистрация</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Электронная почта</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите e-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
</form>
@endsection
