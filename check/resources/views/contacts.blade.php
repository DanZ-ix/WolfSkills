@extends("layouts.app")


@section('title')
    Контакты
@endsection



@section('content')


<div style="margin-left: 40%; margin-right: auto; text-align: center;" class="container">
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%;height:500px"></div>
    </div>
    <div class="column">
      <form action="{{ route('home') }}">


      <div class="form-group">
    <label for="exampleFirstName">Имя</label>
    <input type="FirstName" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Введите имя">
  </div>
  <div class="form-group">
    <label for="exampleLastName">Электронная почта</label>
    <input type="LastName" class="form-control" id="exampleLastName" aria-describedby="LastNameHelp" placeholder="Введите Фамилию">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Выберите страну</label>
    <select id="country" name="country">
          <option value="australia">РАСИЯ</option>
          <option value="canada">Рашн Федерейшон</option>
          <option value="usa">Рашка йобаная</option>
        </select>
  </div>
  <h3>
  <textarea type="LastName" class="form-control" id="exampleLastName" aria-describedby="LastNameHelp" placeholder="Напиши злой отзыв, пидрила"></textarea>
  </h3>

  <button type="submit" class="btn btn-primary">Отправить нам в жопу</button>
      </form>
    </div>
  </div>
</div>
@endsection



