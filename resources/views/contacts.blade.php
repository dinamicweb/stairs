@extends('layouts.app_page')

@section('page-title', 'Контакты')

@section('center')
<div class="center">
    <p class="about">Контакты</p>

    <div class="center_div">
        <div class="lin">
            <p class="p">Ваше имя</p>
            <input type="text" class="input cont_inp">
            <p class="p">Телефон</p>
            <input type="text" class="input cont_inp">
            <p class="p">Сообщение</p>
            <textarea class="input cont_inp areab"></textarea>
        </div>
        <div class="right">
            <p class="right_p">Адрес: <span class="right_span">г. Брянск, ул. Спартаковская, 17</span></p>
            <p class="right_p">Телефон: <span class="right_span">8-920-604-57-78</span></p>
            <p class="right_p">E-mail: <span class="right_span">brlest@rambler.ru</span></p>
        </div>
    </div>
    <button class="send_phone cont" type="submit">Отправить</button>


    <div id="map" class="map"></div>
</div>
@endsection