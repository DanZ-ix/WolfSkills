@extends("layouts.app")


@section('title')
    Главная страница
@endsection

@section('content')



    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>

    
        @if(\Illuminate\Support\Facades\Auth::check())
            @php
                $user = \Illuminate\Support\Facades\Auth::user();

                if ($user['role'] == 'Zakaz')
                    $Zakaz = True;
                else
                    $Zakaz = False;
            @endphp

            @if($Zakaz)
    <div class="row">
    <div class="col">
    <a href="{{ route('order_list') }}"><button type="submit" class="btn btn-light" style="background-color:#B8EBE2; text-align: center;width:350px;height:75px;"><h5>Отправить нам в жопу</h5></button></a>
    </div>
    <div class="col">
   
    </div>
    <div class="col" style="text-align: right;">
    <h4>Дайте задание нашим исполнителям
                                и получите готовую работу в срок!</h4>
    </div>
  </div>
  <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
                
            @endif
        @else
        <div class="row">
    <div class="col">
    <a href="{{ route('order_list') }}"><button type="submit" class="btn btn-light" style="background-color:#B8EBE2; text-align: center;width:350px;height:75px;"><h5>Отправить нам в жопу</h5></button></a>
    </div>
    <div class="col">
   
    </div>
    <div class="col" style="text-align: right;">
    <h4>Дайте задание нашим исполнителям
                            и получите готовую работу в срок!</h4>
    </div>
  </div>
  <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
        @endif

    
  <div class="row">
    <div class="col">
    <h4>Ты студент и хочешь заработать?
                Стань нашим исполнителем, чтобы получить доступ к зданиям!</h4>
    </div>
    <div class="col">
   
    </div>
    <div class="col" style="text-align: right;">
    <a href="{{ route('order_list') }}"><button type="submit" class="btn btn-light" style="background-color:#B8EBE2; text-align: center;width:350px;height:75px;"><h5>Отправить нам в жопу</h5></button></a>
    </div>
  </div>
  <div class="container">
  </div>
  <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
  <div style="background-color:#B8EBE2;">
  <br>
    <h2 style="text-align: center;">Наши преимущества</h2>
    <br>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 70px"></td></tr></table>
        <div style="margin: 25px;">

            <p><h4>1. Наш сайт - это отличный способ получить опыт и найти работодателей</h4></p>
        </div>

    <table><tr><td style="vertical-align:top; padding-top: 25px"></td></tr></table>
        <div style="margin: 25px;">

            <p><h4>2. У нас только профориентированные исполнители</h4></p>
        </div>
    <table><tr><td style="vertical-align:top; padding-top: 25px"></td></tr></table>
        <div style="margin: 25px;">

            <p><h4>3. Отсутствие конкуренции с профессионалами</h4></p>
        </div>

    <!--
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>
    <div id="Otzyv" style="padding: 5px; background-color: #FF6347; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
        <h2>Отзывы</h2>
        <div id="otzyv">
            <table>
                <tr>
                    <td style="width:15%;"><img src="content\images\profiles\tvoieblet.jpg" style=  "width: 100%; border-radius: 100px;"></td>
                    <td style="background-color: #DC143C; vertical-align:top; padding: 10px;">Ваша мама, домохозяйка!</td>
                <tr>
                <tr>
                    <td style="text-align:center;">Ибрагим</td>
                    <td style="text-align:left; background-color: #DC143C;">♂♂♂♀♀</td>
                </tr>
            </table>
        </div>
        <p style="text-align:right;">Показать всё</p>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>
    -->

    <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
    <h3 style="text-align: center;">Вступай в нашу стаю!</h3>
    <h5 style="text-align: center;">Остались вопросы?  Вам помогут разделы <a href="{{route('rules')}}" style="color: #007F85;">Правила</a> и  <a href="{{route('about')}}" style="color: #007F85;">О нас</a>.</h5>
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>



@endsection


