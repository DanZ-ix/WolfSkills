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

                    <form method="POST" action="{{ route('order_submit') }}">
                            @csrf

                        <div class="form-group">
                            <label>Название задания</label>
                            <input name="title" value="" class="form-control" autocomplete="off"  placeholder="Название задания">
                            @error('title')
                            <div class="alert alert alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Выберите направление</label>
                            <select id="country" name="napravlenie">
                                <option value="design">Дизайн</option>
                                <option value="programming">Программирование</option>
                                <option value="elda">Елда</option>
                            </select>
                        </div>
                        <h3>
                            <textarea  name="description"   autocomplete="off"  rows="10" cols="45" class="form-control"   placeholder="Подробно опишите задание, пидрила"></textarea>
                            @error('description')
                            <div class="alert alert alert-danger"> {{ $message }}</div>
                            @enderror
                        </h3>
                        <h3>
                            <textarea name="contacts"  autocomplete="off"  rows="10" cols="45" class="form-control" aria-describedby="ContactsHelp" placeholder="Укажите как с Вами связаться, пидрила"></textarea>
                            @error('contacts')
                            <div class="alert alert alert-danger"> {{ $message }}</div>
                            @enderror
                        </h3>



                        <div class="form-group">
                        <label for="exampleFirstName">Срок выполнения</label>
                        <input type="FirstName"  autocomplete="off" name="deadline" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Укажите сроки заказа">
                            @error('deadline')
                            <div class="alert alert alert-danger"> {{ $message }}</div>
                            @enderror
                        <label for="exampleFirstName">Стоимость заказа</label>
                        <input type="FirstName" autocomplete="off" name="cost" class="form-control" id="exampleInputFirstName" aria-describedby="FirstNameHelp" placeholder="Укажите стоимость заказа">
                            @error('cost')
                            <div class="alert alert alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Отправить нам в жопу</button>
                        <br>
                        <h1></h1>
                        <br>
                        <h1></h1>
                        <br>
                        <h1></h1>
                        <br>
                        <h1></h1>
                    </form>

            </div>
        </div>
    </div>
@endsection


