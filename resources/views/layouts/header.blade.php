<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>True Games - Каталог</title>
</head>
<body>
    <header>
        <div class="logo"><img src="images/13hq.jpg" alt="error"></div>
        <div class="menu">
            <a href="/public" id="info_btn">О нас</a>
            <a href="katalog">Каталог</a>
            <a href="map">Где нас найти?</a>
            @guest
                <a href="login">Вход</a>
                <a href="register">Регистрация</a>
            @else
                <a href="home">Профиль</a>
            @endguest
        </div>
    </header>