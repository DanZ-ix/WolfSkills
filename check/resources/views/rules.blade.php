@extends("layouts.app")


@section('title')
    Правила
@endsection

@section('content')
<h1 style="text-align: center; padding-top: 20px;">тут будут правила</h1>

    <a href = "{{route('RulesFile')}}" style="text-align: center;">Скачать правила</a>
@endsection
