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
    <label for="nickname">Ваше имя</label>
    <input type="text" class="form-control" id="nickname" name="nickname" autocomplete="off" aria-describedby="nicknameHelp" value="" placeholder="Введите nickname">
    <br>

    <label for="city">Город</label>
    <input type="text" class="form-control" id="city" name="city" autocomplete="off"  value="" placeholder="Введите ваш город">
    <br>

    <label for="uni">Университет</label>
    <input type="text" class="form-control" id="uni" name="uni" autocomplete="off"  value="" placeholder="Введите ваш университет">
    <br>

    <label for="direction">Направление обучения</label>
    <input type="text" class="form-control" id="direction" name="direction" autocomplete="off"  value="" placeholder="Введите ваше направление обучения">
    <br>


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
