@extends("layouts.app")


@section('title')
    Волки ебатт
@endsection

@section('content')
<h1>Главная страница</h1>
<a href="contacts">Контакты</a>
<br>
<a href="about">О нас</a>
@endsection

@section('aside')
    @parent
    <p>Dop txt</p>
@endsection
