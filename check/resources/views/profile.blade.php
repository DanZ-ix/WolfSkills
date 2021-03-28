@extends("layouts.app")

@section('title')
    Личный кабинет
@endsection



@section('content')
<!-- <h1 style="text-align: center;">Личный кабинет</h1> -->
<div id="profile">
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
    
</div>

@endsection
