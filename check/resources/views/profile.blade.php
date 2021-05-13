@extends("layouts.app")

@section('title')
    Личный кабинет
@endsection

@php
    use \Illuminate\Support\Facades\Auth;

    $user = Auth::user();

@endphp


@section('content')
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


                <h3>{{$user['direction']}}</h3>
            </div>
            <div id="MyTasks" style="padding: 5px; background-color: #eeeff4; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
                @if($user['role'] == 'Zakaz')
                    <h2>Мои задачи</h2>

                @if($orders==null)
                    <h3>Вы пока не разместили ни одного заказа</h3>
                @endif
                @foreach($orders as $order)

                    <div class="alert-info">

                        <h3>{{$order->name}}</h3>
                        <a href="{{route('one_order', $order->id)}}"> <button class="btn btn-success">страница заказа</button></a>
                        <br>
                    </div>
                        <br>

                    @endforeach

                @endif

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

    <!--
                <div style="margin: 25px; background-color:#d9d9db;">

                </div>
                <p style="text-align:right;">Показать всё</p>
-->

    <!--<div style="display:inline-block;"><div style="display:inline-block;background-color:gray;">5</div>оценка по сосанию</div>
-->
@endsection


