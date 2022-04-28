@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <h2>Каталог > Языки > {{$name}}</h2>

    <div class="langs">
        <div class="langs-h">
            <div>Список тем</div>
            <div><a class="langs-a" href="{{route('create_theme').'?id='.$id.'&name='.$name}}">Создать тему</a></div>
        </div>
        <div class="langs-body">

            @foreach( $data as $item)
                <a href="{{route('theme').'/?theme='.$item->id}}">
                    <div class="langs-body-elem">
                        <div class="w-50">{{$item->name}}</div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</div>
@endsection
