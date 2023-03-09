<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>True Games - Каталог</title>
</head>
<body>
    <header>
        <div class="logo"><img src="{{asset('images/13hq.jpg')}}" alt="error"></div>
        <div class="menu">
            <a href="{{asset('')}}" id="info_btn">О нас</a>
            <a href="{{asset('katalog')}}">Каталог</a>
            <a href="{{asset('map')}}">Где нас найти?</a>
            @guest
                <a href="{{asset('login')}}">Вход</a>
                <a href="{{asset('register')}}">Регистрация</a>
            @else
                <a href="home">Профиль</a>
            @endguest
        </div>
    </header>