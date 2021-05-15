@extends("layouts.app")


@section('title')
    Главная страница
@endsection
@section('style')
   .dick {border: 3px solid #000; border-radius: 10px;}
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
    <a href="{{ route('order') }}"><button type="submit" class="btn btn-light" style="background-color:#ceffff;; text-align: center;width:350px;height:75px; border: 3px solid #000; "><h4>Стать заказчиком</h4></button></a>
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
    <a href="{{ route('order') }}"><button type="submit" class="btn btn-light" style="background-color:#ceffff;; text-align: center;width:350px;height:75px; border: 3px solid #000;"><h4>Стать заказчиком</h4></button></a>
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
    <a href="{{ route('order_list') }}"><button type="submit" class="btn btn-light" style="background-color:#ceffff; text-align: center;width:350px;height:75px; border: 3px solid #000;"><h4>Стать исполнителем</h4></button></a>
    </div>
  </div>
  <div class="container">
  </div>
  <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
  <div style="background-color:#ceffff;; border: 3px solid #000; border-radius: 10px;">
  <br>
    <h2 style="text-align: center;">Наши преимущества</h2>
    <br>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 70px"></td></tr></table>
    <div class="row" style="padding:30px;">
        <div class="col-6"></div>
        <div class="col-6"style="background-color:#ceffff;; border: 3px solid #000; border-radius: 10px;text-align: center;"><h4>1. Наш сайт - это отличный способ получить опыт и найти работодателей</h4></div>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 70px"></td></tr></table>
    <div class="row" style="padding:30px;">
        <div class="col-6" style="text-align:center;background-color:#ceffff;; border: 3px solid #000; border-radius: 10px;"><h4>2. У нас только профориентированные исполнители</h4></div>
        <div class="col-6"></div>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 70px"></td></tr></table>
    <div class="row" style="padding:30px;">
        <div class="col-6"></div>
        <div class="col-6" style="background-color:#ceffff;; border: 3px solid #000; border-radius: 10px;text-align: center;"><h4>3. Отсутствие конкуренции с профессионалами</h4></div>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 70px"></td></tr></table>
   <div class="alert-info dick" style="background-color: #ceffff;">
       <h4 style="text-align: center;">Работа в <b>Wolfskills</b> - это</h4>
       <h4 style="padding:10px;"><img src="content\images\profiles\service.svg" style="width:30px; hight:30px">     &nbsp  Удобный сервис, с постоянной поддержкой
       </h4>
       <h4 style="padding:10px;"><img src="content\images\profiles\star.svg" style="width:30px; hight:30px">     &nbsp  Рейтинговая оценка, легко оценить исполнительские способности исполнителя и рейтинг заказчика
       </h4>
       <h4 style="padding:10px;"><img src="content\images\profiles\backpack.svg" style="width:30px; hight:30px">    &nbsp   Идеальное место для встречи с потенциальными работодателями
       </h4>
       <h4 style="padding:10px;"><img src="content\images\profiles\stairs-up.svg" style="width:30px; hight:30px">    &nbsp   Ценный ресурс для профессионального развития без вложений
       </h4>
       <h4 style="padding:10px;"><img src="content\images\profiles\work.svg" style="width:30px; hight:30px">    &nbsp   Получение бесценного опыта, которой поможет при трудоустройстве
       </h4>

   </div>

    <table>
  <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
  </table>
    <h3 style="text-align: center;">Вступай в нашу стаю!</h3>
    <h5 style="text-align: center;">Остались вопросы?  Вам помогут разделы <a href="{{route('rules')}}" style="color: #007F85;">Правила</a> и  <a href="{{route('about')}}" style="color: #007F85;">О нас</a>.</h5>
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>



@endsection


