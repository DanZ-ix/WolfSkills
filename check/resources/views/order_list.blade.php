@extends("layouts.app")


@section('title')
    Заказы
@endsection

@section('content')
    <h1 style="text-align: center;">Заказы</h1>

    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{$elem->name}}</h3>
            <br>
            <h4>Направление:</h4>
            @if($elem->napravlenie=='design')
                <h5>Дизайн</h5>
            @endif
            @if($elem->napravlenie=='programming')
                <h5>Программирование</h5>
            @endif
            @if($elem->napravlenie=='elda')
                <h5>Елда</h5>
            @endif
            <br>
            <h4>Задача:</h4>
            <h5>{{$elem->opisanie}}</h5>
            <br>
            <h4>Контакты:</h4>
            <h5>{{$elem->telephone}}</h5>
            <br>
            <h4>Сроки:</h4>
            <h5>{{$elem->deadline}}</h5>
            <br>
            <h4>Цена:</h4>
            <h5>{{$elem->cost}}</h5>
        </div>

    @endforeach







@endsection

