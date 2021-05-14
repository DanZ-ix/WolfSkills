@extends("layouts.app")


@section('title')
    Заказ выполнен
@endsection

@section('content')
    <h1 style="text-align: center;">Оставьте отзыв о заказе</h1>


    <form METHOD="POST" action="{{route('OrderReadyPost')}}">
        @csrf
        <h2>Оставьте отзыв об исполнителе</h2>

        <h3>
        <textarea name="review"  autocomplete="off"  rows="10" cols="45" class="form-control" aria-describedby="ContactsHelp" placeholder="Ваш отзыв"></textarea>
        </h3>
            <br>
        <label>На сколько качественно выполнен заказ</label>
        <input name="rating" value="" class="form-control" autocomplete="off"  placeholder="1-5">
        <input name="order_id" type="hidden" value="{{$data}}" class="form-control" autocomplete="off"  placeholder="1-5">
        <br>
        <button type="submit" class="btn btn-primary">Отправить и закончить заказ</button>
        <br>

    </form>
@endsection
