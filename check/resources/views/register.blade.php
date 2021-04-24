@extends("layouts.app")

@section('title')
    Регистарция
@endsection



@section('content')


<form method="POST" action="{{ route('user.register') }}">
    @csrf

<h2 style="text-align: center;">
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
      <input type="radio" name="role" id="option2" value="Isp" autocomplete="on" checked> Я исполнитель
  </label>
  <label class="btn btn-secondary">

      <input type="radio" name="role" id="option1" value="Zakaz" autocomplete="on" > Я заказчик
  </label>
</div>
</h2>


<div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="text" class="form-control" id="nickname" name="nickname" aria-describedby="nicknameHelp" value="" placeholder="Введите nickname">

  </div>

        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="email">
            @error('email')
            <div class="alert alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

  <div class="form-group">
    <label for="password">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Пароль">
      @error('password')
      <div class="alert alert alert-danger"> {{ $message }}</div>
      @enderror
  </div>
  <button type="submit" class="btn btn-lg byn-primary" name="sendMe" value="1">Создать</button>
</form>
@endsection
