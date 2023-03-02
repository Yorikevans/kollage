@include('layouts.header')
            <div class="info_tovar">
                <div>
                    <div class="img"><img src="{{ $prod->image}}" alt="error"></div>
                    <div class="title">{{ $prod->name_tovar }}</div>
                    <div class="price">Цена: {{ $prod->price}}</div>
                    <div class="add"><a href="">В корзину</a></div>
                </div>
            </div>
@include('layouts.footer')