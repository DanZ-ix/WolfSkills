@extends("layouts.app")


@section('meta')
    <meta name="csrf-token" content="'{{ csrf_token() }}">
@endsection


@section('title')
    Разместить заказ
@endsection

@section('content')
    <h1 style="text-align: center;">Разместить заказ</h1>

    <div  style="text-align: center;" class="container">
        <div class="row">
            <div class="column">
                <div id="map" style="width: 100%;height:500px"></div>
            </div>
            <div class="column">

                    <form method="POST" action="{{ route('orders.order_submit') }}">


                        <div class="form-group">
                            <label for="exampleFirstName">Название задания</label>
                            <input type="FirstName" name="name" value="" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Название задания">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Выберите направление</label>
                            <select id="country" name="option">
                                <option value="design">Дизайн</option>
                                <option value="programming">Программирование</option>
                                <option value="elda">Елда</option>
                            </select>
                        </div>
                        <h3>
                            <textarea type="LastName" name="opisanie"  rows="10" cols="45" class="form-control" id="exampleLastName" aria-describedby="LastNameHelp" placeholder="Подробно опишите задание, пидрила"></textarea>
                        </h3>
                        <h3>
                            <textarea type="contacts" name="telephone" rows="10" cols="45" class="form-control" id="exampleContacts" aria-describedby="ContactsHelp" placeholder="Укажите как с Вами связаться, пидрила"></textarea>
                        </h3>



                        <div class="form-group">
                        <label for="exampleFirstName">Срок выполнения</label>
                        <input type="FirstName" name="deadline" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Укажите сроки заказа">
                        <label for="exampleFirstName">Стоимость заказа</label>
                        <input type="FirstName" name="cost" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Укажите стоимость заказа">
                        </div>


                        <button type="submit" class="btn btn-primary">Отправить нам в жопу</button>
                        <br>
                        <h1></h1>
                    </form>

            </div>
        </div>
    </div>
@endsection


