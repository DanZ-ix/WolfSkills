@extends("layouts.app")


@section('title')
    Заказ
@endsection

@section('content')

    <div class="alert alert-info">
        <h3>{{$data->name}}</h3>
        <br>
        <h4>Направление:</h4>
        @if($data->napravlenie=='design')
            <h5>Дизайн</h5>
        @endif
        @if($data->napravlenie=='programming')
            <h5>Программирование</h5>
        @endif
        @if($data->napravlenie=='elda')
            <h5>Елда</h5>
        @endif
        <br>
        <h4>Задача:</h4>
        <h5>{{$data->opisanie}}</h5>
        <br>
        <h4>Контакты:</h4>
        <h5>{{$data->telephone}}</h5>
        <br>
        <h4>Сроки:</h4>
        <h5>{{$data->deadline}}</h5>
        <br>
        <h4>Цена:</h4>
        <h5>{{$data->cost}}</h5>
        <form method="POST" action="{{ route('user.button_order_list') }}">
            @csrf
            <input type="hidden" class="form-control" id="nickname" name="id" autocomplete="off" aria-describedby="nicknameHelp" value="{{$data->id}}">
            <input type="hidden" class="form-control" id="nickname" name="Zakaz_ID" autocomplete="off" aria-describedby="nicknameHelp" value="{{$data->Zakaz_ID}}">

            <button type="submit" class="btn btn-warning" name="sendMe" value="1">Подать заявку</button>
        </form>

    </div>


@endsection
