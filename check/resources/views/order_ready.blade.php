@extends("layouts.app")


@section('title')
    Заказ выполнен
@endsection

@section('content')



    <form METHOD="POST" action="{{route('OrderReadyPost')}}">
        @csrf
        <h2 style="text-align: center; padding-top: 40px;padding-bottom: 40px;">Оставьте отзыв об исполнителе</h2>

        <h3>
        <textarea name="review"  autocomplete="off"  rows="10" cols="45" class="form-control" aria-describedby="ContactsHelp" placeholder="Ваш отзыв"></textarea>
        </h3>
            <br>
        <label>Насколько качественно выполнен заказ</label>
        <input name="rating" value="" class="form-control" autocomplete="off"  placeholder="1-5">
        <input name="order_id" type="hidden" value="{{$data}}" class="form-control" autocomplete="off"  placeholder="1-5">
        <br>
        <button type="submit" class="btn btn-light"style="background-color:#ceffff; text-align: center;border: 1px solid #000;" name="sendMe" value="1">Отправить и закончить заказ</button>
        <br>

    </form>
@endsection
