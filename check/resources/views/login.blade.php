@extends("layouts.app")

@section('meta')
    <meta name="csrf-token" content="'{{ csrf_token() }}">
@endsection


@section('title')
    Логин
@endsection



@section('content')

<form method="POST" action="{{ route('user.login') }}"  >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Электронная почта</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Введите E-mail">
      @error('email')
      <div class="alert alert alert-danger"> {{ $message }}</div>
      @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Пароль">
      @error('password')
      <div class="alert alert alert-danger"> {{ $message }}</div>
      @enderror
  </div>
  <button type="submit" class="btn btn-light" style="background-color: #B8EBE2;">Войти</button>
</form>
<br>





@endsection
