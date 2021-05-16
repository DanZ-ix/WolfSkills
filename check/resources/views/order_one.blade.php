@extends("layouts.app")


@section('title')
    Заказ
@endsection

@php
    use \Illuminate\Support\Facades\Auth;
    use \Illuminate\Support\Facades\DB;
    $user = Auth::user();

    $users = DB::select('select * from users');



@endphp
@section('style')
    .dick {background-color:#ceffff;border-radius: 10px;}
@endsection


@section('content')



<div style="padding-bottom: 40px; padding-top: 40px;">
    <div class="alert alert-info">
        <div class="row">
            <div class="col" style="text-align: center; padding-bottom: 40px;"><h3>{{$data->name}}</h3>
            </div>
        </div>
        <div class="row dick">
            <div class="col"><h4>Направление:</h4>
                @if($data->napravlenie=='design')
                    <h5>Дизайн</h5>
                @endif
                @if($data->napravlenie=='programming')
                    <h5>Программирование</h5>
                @endif
                @if($data->napravlenie=='elda')
                    <h5>Елда</h5>
                @endif
            </div>
            <div class="col" style="text-align: right;"><h4><img src="{{Asset('content\images\profiles\timer.svg')}}"> &nbsp; Сроки:</h4>
                <h5>{{$data->deadline}}</h5>
            </div>
            <div class="col" style="text-align: right;"><h4><img src="{{Asset('content\images\profiles\coin.svg')}}"> &nbsp; Цена:</h4>
                <h5>{{$data->cost}}</h5>
            </div>
        </div>



        <br>
        <h4>Задача:</h4>
        <h5>{{$data->opisanie}}</h5>
        <br>
        <h4>Контакты:</h4>
        <h5>{{$data->telephone}}</h5>
        <br>




        @if($user['role']=='Isp')

            @if($request == null)

            <form method="POST" action="{{ route('user.button_order_list') }}">
            @csrf
                <h3>
                    <textarea name="rec"  autocomplete="off"  rows="10" cols="45" class="form-control" aria-describedby="ContactsHelp" placeholder="Напишите, почему должны выбрать именно вас"></textarea>
                </h3>
            <input type="hidden" class="form-control" id="nickname" name="id" autocomplete="off" aria-describedby="nicknameHelp" value="{{$data->id}}">
            <input type="hidden" class="form-control" id="nickname" name="Zakaz_ID" autocomplete="off" aria-describedby="nicknameHelp" value="{{$data->Zakaz_ID}}">
                <input type="hidden" class="form-control" id="nickname" name="order_name" autocomplete="off" aria-describedby="nicknameHelp" value="{{$data->name}}">

            <button type="submit" class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;" name="sendMe" value="1">Подать заявку</button>

            </form>

            @else
                <h3>Вы уже подали заявку на этот заказ</h3>

             @endif
        @endif



    </div>
</div>
    @if($user['role']=='Zakaz')

        @if($data->status == 0)
            <div style="padding-bottom: 40px; padding-top: 40px;">
        <div class="alert alert-info">
            <h1>Выберите исполнителя вашего заказа</h1>
            @foreach($requests as $request)
                @foreach($users as $isp)
                    @if($isp->id==$request->isp_id)

                        <h3>{{$isp->nickname}}</h3>
                        <h3>{{$isp->uni}}</h3>
                        <h3>{{$isp->direction}}</h3>
                        <br>
                        <h3>{{$request->text}}</h3>
                        <br>

                        <form method="POST" action="{{ route('user.button_order_choose') }}">
                            @csrf
                            <input type="hidden" class="form-control" name="isp_id" autocomplete="off" value="{{$isp->id}}">
                            <input type="hidden" class="form-control" name="zakaz_id" autocomplete="off" value="{{$user->id}}">
                            <input type="hidden" class="form-control" name="request_id" autocomplete="off" value="{{$request->id}}">
                            <input type="hidden" class="form-control" name="order_id" autocomplete="off" value="{{$request->order_id}}">


                            <button type="submit" class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;" name="sendMe" value="1">Выбрать исполнителя</button>
                        </form>

                    @endif

                @endforeach

            @endforeach


        </div>

            </div>
            @endif

        @if($data->status==1)
            <h1> Заказ выполняется исполнителем</h1>
            @foreach($users as $isp)

                @if($isp->id == $data->IspID)

                    <h2> {{$isp->nickname}} </h2>
                @endif
            @endforeach
            <form method="POST" action="{{ route('OrderReady') }}" >
                @csrf
                <input type="hidden" class="form-control" name="order_id" autocomplete="off" value="{{$data->id}}">


                <button type="submit" class="btn btn-light byn-primary" style="background-color:#ceffff; text-align: center;border: 1px solid #000;" name="sendMe" value="1">Заказ выполнен</button>
            </form>

        @endif


        @if($data->status==2)
            <h1> Заказ выполнен</h1>
        @endif
    @endif


@endsection
