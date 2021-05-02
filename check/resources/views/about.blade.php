@extends("layouts.app")

@section('title')
    О нас
@endsection


@section('content')

<form>
   

<h2 style="text-align: left;">Wolfskills – это фриланс биржа, где исполнителями выступают исключительно студенты. Это дает возможность молодым специалистам работать и развиваться по своему профилю. Наш сайт дает опыт студентам, а заказчикам выполненную работу за приемлемую цен и возможность поиска будущих специалистов.</h2>

<h2 style="padding-top:50px; text-align: left;">Остались вопросы? Отправьте нам их и мы Вам ответим!</h2>


<div class="form-group">
    <label for="nickname">Ваше имя</label>
    <input type="text" class="form-control" id="nickname" name="nickname" autocomplete="off" aria-describedby="nicknameHelp" value="" placeholder="Введите ФИО">
    <br>
    <div class="form-group">
                <label>Я</label>
                <select id="country" name="zakispol">
                    <option value="design">исполнитель</option>
                    <option value="programming">заказчик</option>
                    
                </select>
    </div>
   
    
    <h3>
                <textarea name="contacts"  autocomplete="off"  rows="10" cols="45" class="form-control" aria-describedby="ContactsHelp" placeholder="Подробно объясните вопрос или проблему"></textarea>
                
                
                
            </h3>

</div>

        <div class="form-group">
            <label for="email">Введите вашу электронную почту, чтобы мы могли Вам ответить</label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="E-mail">
            
            
            
        </div>

  
  
  <button type="submit" class="btn btn-primary byn-primary">Отправить</button>
</form>
@endsection
