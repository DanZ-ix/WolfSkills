@extends("layouts.app")

@section('title')
    Личный кабинет
@endsection

@php
    use \Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    $user = Auth::user();
    $user_name = $user['nickname'];
    $users = DB::select('select * from users');


    if ($user['role'] == 'Zakaz')
    {
        $orders = DB::select('select * from orders where Zakaz_ID = ?', [Auth::id()]);

        $requests = DB::select('select * from orders_requests where zakaz_id = ?', [Auth::id()]);

    }
    else
        {
        $orders = DB::select('select * from orders where IspID = ?', [Auth::id()]);
    }

@endphp


@section('content')
    <!-- <h1 style="text-align: center;">Личный кабинет</h1> -->
    <!--<div id="profile">
      <div id="Avatarka" style="display:inline-block; width: 25%; vertical-align:top;">
        <img src="content\images\profiles\tvoieblet.jpg" style=  "border-radius: 100px; width:100%; height:auto;">
        <h3 id="rating" style="text-align:center;">♂♂♂♂♂</h3>
      </div>
      <div id="profileBio" style="background-color:gray; display:inline-block; width: 74%; vertical-align:top;">
        <h3>Меня зовут Дядя Вася</h3>
        <h3>Я живу в навозе</h3>
        <h3>Я ем какашки</h3>
      </div>
    </div>

    <div id="mainsection">

    </div>-->
    <div id="page">
        <div id="avatarka" style="float:left; width:25%;">
            <img src="content\images\profiles\tvoieblet.jpg" style=  "border-radius: 100px; width:100%; height:auto;">

            <h3 id="rating" style="text-align:center;">Рейтинг</h3>
            @if(round($user['stars']) == 0)
                <h3 id="rating" style="text-align:center;">Нет рейтинга</h3>
            @endif

            @if(round($user['stars']) == 1)
                <h3 id="rating" style="text-align:center;">*</h3>
            @endif

            @if(round($user['stars']) == 2)
                <h3 id="rating" style="text-align:center;">**</h3>
            @endif

            @if(round($user['stars']) == 3)
                <h3 id="rating" style="text-align:center;">***</h3>
            @endif

            @if(round($user['stars']) == 4)
                <h3 id="rating" style="text-align:center;">****</h3>
            @endif

            @if(round($user['stars']) == 5)
                <h3 id="rating" style="text-align:center;">*****</h3>
            @endif


            <h3 id="mmr" style="text-align:center;">Очки</h3>

            <h3 id="rating" style="text-align:center;">{{$user['rating']}}</h3>

        </div>
        <div id="mainsection" style="float:right; width:70%">
            <div id="ProfileBio" style="padding: 5px; background-color: #eeeff4; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
                <h3>{{$user['nickname']}}</h3>
                <h3>{{$user['city']}}</h3>
                <h3>{{$user['uni']}}</h3>

                <!--<div style="display:inline-block;"><div style="display:inline-block;background-color:gray;">5</div>оценка по сосанию</div>
                -->
                <h3>{{$user['direction']}}</h3>
            </div>
            <div id="MyTasks" style="padding: 5px; background-color: #eeeff4; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
                @if($user['role'] == 'Zakaz')
                    <h2>Мои задачи</h2>
                @foreach($orders as $order)



                    @if($order->condition==1)
                        <h2>находим исполнителя и выводим его ник и почту</h2>

                        @endif

                    @if($order->condition==2)
                        <h2>Выполненный заказ</h2>
                        @endif



                    @if($order->condition==0)
                        <h2>Задача:</h2>
                        <h3>{{$order->name}}</h3>
                        <h2>Заявки: </h2>

                    @foreach($requests as $request)
                        @foreach($users as $user_isp)
                            @if($user_isp->id == $request->isp_id and $request->order_id == $order->id)
                                    <div class="alert alert-info">


                                        <h3>{{$user_isp->nickname}}</h3>
                                        <h3>{{$user_isp->email}}</h3>

                                        <form method="POST" action="{{ route('user.button_order_choose') }}">
                                            @csrf
                                            <input type="hidden" class="form-control" name="isp_id" autocomplete="off" value="{{$user_isp->id}}">
                                            <input type="hidden" class="form-control" name="zakaz_id" autocomplete="off" value="{{$user->id}}">
                                            <input type="hidden" class="form-control" name="request_id" autocomplete="off" value="{{$request->id}}">
                                            <input type="hidden" class="form-control" name="order_id" autocomplete="off" value="{{$order->id}}">


                                            <button type="submit" class="btn btn-primary" name="sendMe" value="1">Выбрать исполнителя</button>
                                        </form>

                                    </div>

                                @break

                                @endif
                            @endforeach



                    @endforeach
                    <br>

                    @endif
                    @endforeach




                @endif

<!--
                <div style="margin: 25px; background-color:#d9d9db;">
                    @foreach($orders as $order)
                    <h3 id="taskName">{{$order->name}}</h3>
                    <p>{{$order->opisanie}}</p>
                    @endforeach
                </div>
                <p style="text-align:right;">Показать всё</p>
-->
            </div>
            <div id="Otzyv" style="padding: 5px; background-color: #eeeff4; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
                <h2>Отзывы</h2>
                <div id="otzyv">
                    <table>
                        <tr>
                            <td style="width:15%;"><img src="content\images\profiles\tvoieblet.jpg" style=  "width: 100%; border-radius: 100px;"></td>
                            <td style="background-color: #d9d9db; vertical-align:top; padding: 10px;">Ваша мама, домохозяйка!</td>
                        <tr>
                        <tr>
                            <td style="text-align:center;">Ибрагим</td>
                            <td style="text-align:left; background-color: #d9d9db;">♂♂♂♀♀</td>
                        </tr>
                    </table>
                </div>
                <p style="text-align:right;">Показать всё</p>
            </div>

        </div>

    </div>

@endsection
