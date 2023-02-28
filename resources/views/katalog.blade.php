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
    <div class="hka"><h2>Каталог товаров</h2></div>
    <div class="katalog">
        <div class="item">
            @foreach($prod as $obprod)
                <div class="card">
                    <div class="img"><img src="{{ $obprod->image}}" alt="error"></div>
                    <div class="title">{{ $obprod->name_tovar}}</div>
                    <div class="price">Цена: {{ $obprod->price}}</div>
                    <div class="btn_buy">Купить</div>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <div class="logo"><img src="images/13hq.jpg" alt="error"></div>
        <div class="menu">
            <a href="" id="info_btn">О нас</a>
            <a href="katalog">Каталог</a>
            <a href="map">Где нас найти?</a>
            @guest
                <a href="login">Вход</a>
                <a href="register">Регистрация</a>
            @else
                <a href="home">Профиль</a>
            @endguest
        </div>
        <div class="contacts">
            <p>
                Adress: Ул. Комарова 13
            </p>
            <p>
                Email: <a href="email.com">AraAraKiriGiri@mail.ru</a>
            </p>
            <p>
                Telephone: <a href="tel: 88005553535">+7 800 555 35 35</a>;
            </p>
        </div>
    </footer>
</body>
</html>
