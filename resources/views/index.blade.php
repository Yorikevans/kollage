<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>True Games</title>
</head>
<body>
    <header>
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
    </header>
    <div class="hka">
        <h2 class="info_h">О нас</h2>
    </div>
    <div class="info">
        <div class="logo_info"><img src="images/13hq.jpg" alt="error"></div>
        <div class="text">
            <p>
                Истинная игра - то что ищут многие, наш сайт тот кто даст вам более 300 игр по низкой цене. <br> <br>
                Мы продаём игры уже более 2 месяцев, У нас уже имеются самые новейшие игры вышедшие только вчера! <br>
                Не упусти свой шанс урвать игру по низкой цене.
            </p>
        </div>
    </div>
    <div class="hka">
        <h2>Новинки компании</h2>
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














    <script src="../resources/js/script.js"></script>
</body>
</html>
