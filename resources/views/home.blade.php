@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ваши товары') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @foreach($prod as $obprod)
                        <div class="card">
                            <div class="img"><img src="{{ $obprod->product->image}}" alt="error"></div>
                            <div class="title">{{ $obprod->product->name_tovar}}</div>
                            <div class="price">Цена: {{ $obprod->product->price}}</div>
                            <div class="btn_buy"><a href="info_tov{{ $obprod -> id }}">Купить</a></div>
                            <div class="delete_tov"><a href="{{route('delete', ['id' => $obprod -> id])}}">Удалить из корзины</a></div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
