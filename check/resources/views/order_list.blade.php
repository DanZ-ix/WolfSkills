@extends("layouts.app")


@section('title')
    Заказы
@endsection

@section('content')
    <div class="row">
        <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list')}}"><button class="btn btn-warning">Все заказы</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'design')}}"><button class="btn btn-warning">Дизайн</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'programming')}}"><button class="btn btn-warning">Программирование</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'elda')}}"><button class="btn btn-warning">ЕЛДА</button></a>
    </div>
    </div>
    <br>
    @if($data==null)
        <h1 style="text-align: center">Заказов пока нет</h1>
    @endif
    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{$elem->name}}</h3>
            <br>
            <br>
            <h4>Сроки:</h4>
            <h5>{{$elem->deadline}}</h5>
            <br>
            <h4>Цена:</h4>
            <h5>{{$elem->cost}}</h5>
            <br>
            <a href="{{route('one_order', $elem->id)}}"><button class="btn btn-primary">Детальнее</button></a>

        </div>

    @endforeach





@endsection


