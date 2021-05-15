@extends("layouts.app")


@section('title')
    Заказы
@endsection

@section('content')
    <div class="row">
        <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list')}}"><button class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;">Все заказы</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'design')}}"><button class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;">Дизайн</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'programming')}}"><button class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;">Программирование</button></a>
    </div>
    <div class="col-sm" style="text-align: center">
        <a href="{{route('order_list_napr', 'elda')}}"><button class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;">ЕЛДА</button></a>
    </div>
    </div>
    <br>
    @if($data==null)
        <h1 style="text-align: center">Заказов пока нет</h1>
    @endif
    @foreach($data as $elem)
        <div class="alert alert-info">
            <div class="row">
                <div class="col"><h3>{{$elem->name}}</h3>
                </div>
                <div class="col" style="text-align: right;"><h4>Сроки:</h4><h5>{{$elem->deadline}}</h5>
                </div>
                <div class="col" style="text-align: right;"><h4>Цена:</h4><h5>{{$elem->cost}}</h5>
                </div>
            </div>


            <a href="{{route('one_order', $elem->id)}}"><button class="btn btn-light" style="background-color:#ceffff; text-align: center;border: 1px solid #000;">Детальнее</button></a>

        </div>

    @endforeach





@endsection


