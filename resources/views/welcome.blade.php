@extends('layouts.main')

@section('title', 'Welcome page')

@section('content')
    <div class="top__img">
        <h2 class="heading">Автоматический сбор новостей с выбранных сайтов</h2>
    </div>
        <h3 class="info__heading">Для кого подходит News aggregator:</h3>
    <section  class="users users_center" id="users">
        <div class="users__item users__img users__img1-1">
            <h2 class="heading">Аналитикам и инвесторам</h2>
            <p class="text text_margin text_users">Собирайте новости по интересующим темам и ключевым словам</p>
        </div>
        <div class="users__item users__text  users__text_1"></div>
        <div class="users__item users__img users__img1-2"></div>
        <div class="users__item users__text users__text_2"></div>
        <div class="users__item users__img users__img1-3">
            <h2 class="heading">Маркетологам</h2>
            <p class="text text_margin text_users">Получайте информацию по интересующим инфоповодам и ключевым словам</p>
        </div>
        <div class="users__item users__img users__img1-4"></div>
        <div class="users__item users__text  users__text_1"></div>
        <div class="users__item users__img users__img1-5">
            <h3 class="heading">Любителям спорта</h3>
            <p class="text text_margin text_users">Следите за новостями по ключевым словам</p>
        </div>
        <div class="users__item users__img users__img2-1"></div>
        <div class="users__item users__img users__img2-2"></div>
        <div class="users__item users__img users__img2-3"></div>
        <div class="users__item users__text users__text_2"></div>
        <div class="users__item users__img users__img2-4"></div>
        <div class="users__item users__img users__img2-5"></div>



    </section>

{{--    <div class="mx-auto" style="margin-top: 300px; margin-bottom: 300px">--}}
{{--        <h1 class="text-center">Добро пожаловать на новостной портал</h1><br>--}}
{{--        <p class="text-center"><a href="/category " class="btn btn-lg" style="background-color: #3AB5D0">Перейти к категориям новостей</a></p>--}}
{{--    </div>--}}
@endsection
