@extends('layouts.app')

@section('content')
<div class="container-xl">
    <h1>Каталог</h1>

    <div class="langs">
        <div class="langs-h">
            <div>Языки</div>
            <div><a class="langs-a" onclick="add_lang()">Добавить язык</a></div>
            <div id="form" class="langs-form">
                <form action="{{route('add_lang')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Название языка" name="name" class="btn btn-success bg-white text-black">
                    <input type="submit" value="Отправить" class="btn btn-success">
                </form>
            </div>
        </div>
        <div class="langs-body">

            @foreach( $data as $item)
                <a href="{{route('lang').'/?lang='.$item->id}}">
                    <div class="langs-body-elem">
                        <div class="w-50">{{$item->name}}</div>
                        <div>Тем : {{$item->c_themes}}</div>
                        <div>Ответов : {{$item->c_answers}}</div>
                        <div>Последняя тема : {{$item->updated_at}}</div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</div>
@endsection
