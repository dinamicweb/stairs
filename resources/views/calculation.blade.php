@extends('layouts.app_page')

@section('page-title', 'Заказать расчёт')

@section('center')
<div class="center">
    <p class="about">Заказать расчёт</p>

    <div class="line">
        <p class="p">Ваше имя</p>
        <input type="text" class="input calc_inp">
    </div>

    <div class="line">
        <p class="p">Телефон</p>
        <input type="text" class="input calc_inp">
    </div>

    <div class="line">
        <p class="p">Сообщение</p>
        <textarea class="input calc_inp areab"></textarea>
    </div>

    <button class="send_phone calc" type="submit">Отправить</button>
</div>
@endsection