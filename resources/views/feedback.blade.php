@extends('layouts.app_page')

@section('page-title', 'Обратная связь')

@section('center')
<div class="center">
    <p class="about">Обратная связь</p>
    <p class="inform">Введите Ваш телефон, и мы Вам перезвоним через 5 минут</p>
    <input type="text" class="in_phone">
    <button type="submit" class="send_phone feed">Отправить</button>
</div>
@endsection