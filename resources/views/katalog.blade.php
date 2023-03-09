@php
use App\Models\kategory
@endphp
@include('layouts.header')


    <div class="hka"><h2>Каталог товаров</h2></div>
    <div class="katalog">
        <div class="sort">
            @foreach($prod as $obprod)
                <a href="{{route('game',$obprod->id_kat)}}">{{ kategory::find( $obprod->id_kat)->name_kategory }}</a>
            @endforeach
            <a href="{{ route('sort_min') }}">сначала дешёвое</a>
            <a href="{{ route('sort_max') }}">сначала дорогие</a>
        </div>
        <div class="item">
            @foreach($prod  as $obprod)
            <div class="card">
                <div class="img"><img src="{{asset($obprod->image)}}" alt="error"></div>
                <div class="title">{{ $obprod->name_tovar}}</div>
                <div class="price">Цена: {{ $obprod->price}}</div>
                @guest
                <a href="home">Авторизируйтесь</a>
                @else
                <div class="btn_buy"><a href="info_tov{{ $obprod -> id }}">Купить</a></div>
                @endif
            </div>
            @endforeach
        </div>
    </div>

@include('layouts.footer')

