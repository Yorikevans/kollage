<div class="footer_bottom">
    <footer>
        <div class="logo"><img src="{{asset('images/13hq.jpg')}}" alt="error"></div>
        <div class="menu">
            <a href="{{asset('')}}" id="info_btn">О нас</a>
            <a href="{{asset('katalog')}}">Каталог</a>
            <a href="{{asset('map')}}">Где нас найти?</a>
            @guest
                <a href="{{asset('login')}}">Вход</a>
                <a href="{{asset('register')}}">Регистрация</a>
            @else
                <a href="{{asset('home')}}">Профиль</a>
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
</div>
    <script src="../resources/js/script.js"></script>
</body>
</html>
