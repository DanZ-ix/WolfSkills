@extends("layouts.app")

@section('title')
    Регистарция
@endsection



@section('content')


<form method="POST" action="{{ route('user.register') }}">
    @csrf

<h2 style="text-align: center;">
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-light active" style="width:150px;background-color:#ceffff; text-align: center; border: 1px solid #000;">
      <input type="radio" name="role" id="option2" value="Isp" autocomplete="on" checked> Я исполнитель
  </label>
  <label class="btn btn-light" style="width: 150px;background-color:#ceffff; text-align: center; border: 1px solid #000;">

      <input type="radio" name="role" id="option1" value="Zakaz" autocomplete="on" > Я заказчик
  </label>
</div>
</h2>


<div class="form-group">
    <label for="nickname">Ваше ФИО</label>
    <input type="text" class="form-control" id="nickname" name="nickname" autocomplete="off" aria-describedby="nicknameHelp" value="" placeholder="Введите ФИО">
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
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="E-mail">
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


  <button type="submit" class="btn btn-light" style="background-color:#ceffff; text-align: center; border: 1px solid #000;" name="sendMe" value="1">Создать</button>
</form>
@endsection
