@include('layouts.header')
    <div class="hka">
        <h2 class="info_h">Панель Администратора</h2>
    </div>
        <div class="tavars_cards_admin">
            @foreach($prod as $obprod)
            <div class="tov_row">
                <div class="name_tov">{{ $obprod->name_tovar}}</div>
                <div class="price_tov">{{ $obprod->price}}</div>
                <div class="delete_tov_bd"><a href="{{route('delete', ['id' => $obprod -> id])}}">DELETE</a></div>
            </div>
            @endforeach
        </div>
    <div class="new_add"><a href="javascript:void(0)">Добавить новый товар</a></div>
        <div class="form_add">
            <form action="{{ route('add_tov') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="name_tovar" name="name_tovar">
                <input type="text" placeholder="price_tovar" name="price_tovar">
                <input type="file" placeholder="IMG" name="img_url">
                <button type="submit">ADD</button>
            </form>
        </div>
