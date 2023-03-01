@include('layouts.header')


    <div class="hka"><h2>Каталог товаров</h2></div>
    <div class="katalog">
        <div class="item">
            @foreach($prod as $obprod)
            <div class="card">
                <div class="img"><img src="{{ $obprod->image}}" alt="error"></div>
                <div class="title">{{ $obprod->name_tovar}}</div>
                <div class="price">Цена: {{ $obprod->price}}</div>
                @guest
                <div class="btn_buy"><a href="home">Автоизируйтесь</a></div>
                @else
                <div class="btn_buy">Купить</div>
                @endif
            </div>
            @endforeach
        </div>
    </div>

@include('layouts.footer')
</body>
</html>
