@extends("layouts.app")


@section('title')
    Заказы
@endsection

@section('content')







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
        <form method="POST" action="{{ route('user.button_order_list') }}">
            @csrf
            <input type="hidden" class="form-control" id="nickname" name="id" autocomplete="off" aria-describedby="nicknameHelp" value="{{$elem->id}}" placeholder="Введите nickname">

            <button type="submit" class="btn btn-lg byn-primary" name="sendMe" value="1">Создать</button>
        </form>

        </div>

    @endforeach





@endsection


