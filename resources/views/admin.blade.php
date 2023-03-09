@php
use App\Models\kategory
@endphp
@include('layouts.header')
    <div class="hka">
        <h2 class="info_h">Панель Администратора</h2>
    </div>
        <div class="tavars_cards_admin">
            @foreach($prod as $obprod)
            <div class="tov_row">
                <div class="name_tov">NAME: {{ $obprod->name_tovar}}</div>
                <div class="price_tov">PRICE: {{ $obprod->price}}</div>
                <div class="id_kat">KATEGORY: {{ kategory::find( $obprod->id_kat)->name_kategory }}</div>
                <div class="price_tov">COUNT: {{ $obprod->kolvo}}</div>
                <div class="delete_tov_bd"><a href="{{route('delete_tov', ['id' => $obprod -> id])}}">DELETE</a></div>
            </div>
            @endforeach
        </div>
    <div class="new_add"><a href="javascript:void(0)">Добавить новый товар</a></div>
        <div class="form_add">
            <form action="{{ route('add_tov') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="name_tovar" name="name_tovar">
                <select name="id_kat" id="">
                    @foreach($kat as $obprod)
                        <option value="{{$obprod->id}}">{{$obprod->name_kategory}}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="price" name="price_tovar">
                <input type="text" placeholder="text" name="text">
                <input type="text" placeholder="date" name="data_create">
                <input type="text" placeholder="count" name="count">
                <input type="text" placeholder="country" name="country">
                <input type="file" placeholder="IMG" name="img_url">
                <button type="submit">ADD</button>
            </form>
            <form action="{{ route('add_kategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="kategory_name" name="kategory_name">
                <button type="submit">ADD</button>
            </form>
        </div>
        <div class="hka">
            <h2 class="info_h">Категории</h2>
        </div>
        <div class="all_kate">
            @foreach($prod as $obprod)
                <div class="id_kat">{{ kategory::find( $obprod->id_kat)->name_kategory }} <a href="{{route('delete_kat', ['id' => $obprod -> id_kat])}}" style= "color:red;">УДАЛИТЬ КАТЕГОРИЮ</a></div>
            @endforeach
        </div>
        <script src="../resources/js/script.js"></script>