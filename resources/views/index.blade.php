@include('layouts.header')


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
    </div>
    <div class="hka"><h2>Новинки компании</h2></div>
    <div class="slider">
        <div class="items"><div class="prev"><</div></div>
        <div class="tavars_cards">
            @foreach($prod as $obprod)
            <div class="card">
                <div class="img"><img src="{{ $obprod->image}}" alt="error"></div>
                <div class="title">{{ $obprod->name_tovar }}</div>
                <div class="price">Цена: {{ $obprod->price}}</div>
                @guest
                <a href="home">Авторизируйтесь</a>
                @else
                <div class="btn_buy"><a href="info_tov {{ $obprod -> id }}">Купить</a></div>
                @endguest
            </div>
            @endforeach
        </div>
        <div class="items"><div class="next">></div></div>
    </div>

@include('layouts.footer')