@extends("layouts.app")


@section('title')
    Главная страница
@endsection

@section('content')



    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>

    <table>
        @if(\Illuminate\Support\Facades\Auth::check())
            @php
                $user = \Illuminate\Support\Facades\Auth::user();

                if ($user['role'] == 'Zakaz')
                    $Zakaz = True;
                else
                    $Zakaz = False;
            @endphp

            @if($Zakaz)

                <tr>
                    <form method="GET" action="{{ route('order') }}">
                        @csrf
                        <td style="width:15%;"><button type="submit" class="btn btn-primary" style="text-align: center;width:350px;height:75px;"><h5>Отправить нам в жопу</h5></button></td>
                        <td style="vertical-align:top; padding: 10px 10px 10px 50px;"><h4>Дайте задание нашим исполнителям
                                и получите готовую работу в срок!</h4></td>
                    </form>
                </tr>
                <tr><td style="vertical-align:top; padding-top: 100px"></td></tr>
            @endif
        @endif



<form method="GET" action="{{ route('order_list') }}">
    @csrf
        <tr>

            <td style="vertical-align:top; padding: 10px;"><h4>Ты студент и хочешь заработать?
                Стань нашим исполнителем, чтобы получить доступ к зданиям!</h4></td>
            <td style="width:15%;padding: 10px 10px 10px 50px;"><button type="submit" class="btn btn-primary" style="text-align: center;width:350px;height:75px;"><h5>Отправить нам в жопу</h5></button></td>
        </tr>
</form>
        <tr><td style="vertical-align:top; padding-top: 225px"></td></tr>
    </table>
    <h2 style="text-align: center;">Наши преимущества</h2>

    <table><tr><td style="vertical-align:top; padding-top: 100px"></td></tr></table>
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
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>
    <div id="Otzyv" style="padding: 5px; background-color: #FFC0CB; margin-top:15px;margin-bottom:15px;margin-left:5px;margin-right:5px;">
        <h2>Отзывы</h2>
        <div id="otzyv">
            <table>
                <tr>
                    <td style="width:15%;"><img src="content\images\profiles\tvoieblet.jpg" style=  "width: 100%; border-radius: 100px;"></td>
                    <td style="background-color: #FFB6C1; vertical-align:top; padding: 10px;">Ваша мама, домохозяйка!</td>
                <tr>
                <tr>
                    <td style="text-align:center;">Ибрагим</td>
                    <td style="text-align:left; background-color: #FFB6C1;">♂♂♂♀♀</td>
                </tr>
            </table>
        </div>
        <p style="text-align:right;">Показать всё</p>
    </div>
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>

    <h3 style="text-align: center;">Вступай в нашу стаю!</h3>
    <h5 style="text-align: center;">Остались вопросы?  Вам помогут разделы Правила и  О нас.</h5>
    <table><tr><td style="vertical-align:top; padding-top: 225px"></td></tr></table>



@endsection


