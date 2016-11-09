
@extends('layouts.app')

@section('page-title', 'Лестницы-Стиль')

@section('main-content')
    <div class="left_banners_column">

        <div class="left_banner">
            <div class="img_p">
                <p>Лестница<br> из монолитного бетона</p>
                <p>от 40 000 рублей</p>
            </div>
            <img src="images/1.png" alt="">
        </div>

        <div class="left_banner">
            <div class="img_p">
                <p>Лестница металлическая <br>на ступенчатых косоурах</p>
                <p>от 50 000 рублей</p>
            </div>
            <img src="images/2.png" alt="">
        </div>

        <div class="left_banner">
            <div class="img_p">
                <p>Лестница на<br>спиральной тетиве,<br>тонированная</p>
                <p>от 50 000 рублей</p>
            </div>
            <img src="images/3.png" alt="">
        </div>
    </div>
    <div class="main_div">

        <header class="header">
            <a class="phone_index" href="tel:+79206045778">+7 (920) 604-57-78</a>
            <div class="nfo_index"><div class="address_index"><p>г. Брянск, ул. Спартаковская, 17</p></div>
                <div class="email_index"><a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a></div></div>
            <a href="calculation"><div class="order_index">Заказать расчёт</div></a>
        </header>
        <div style="position:relative;">
            <a class="ord" href="#">Сделать заказ</a>
            <div id="slider_top" class="slider_top">
                <img src="images/slider/slider.png" alt="">
                <img src="images/slider/slider.png" alt="">
                <img src="images/slider/slider.png" alt="">
            </div>
        </div>
        <div class="icons">
            <div class="guarantee">
                <p>Гарантия<br>качества</p>
            </div>
            <div class="stuff"><p>Высококвалифицированный<br>персонал</p></div>
            <div class="job"><p>13 лет опыт<br>работы</p></div>
            <div class="auto"><p>Бесплатный выезд<br> на объект</p></div>
        </div>
        <div class="about_index">
            <p>О КОМПАНИИ</p>
            <p>Наша компания была создана в 2003 году. Основной идеей её создания явилось желание создать лестницы из различных
                материалов, соответствующих запросам самых требовательных клиентов. Сфера наших интересов - лестницы из дерева, металла,
                бетона. В своей работе мы применяем всё то лучшее, что есть в создании лестниц. На сегодняшний день команда наших специлистов в
                состоянии сделать практически любую лестницу - от простых маршевых, до сложнейших спиральных. Надеемся, что сотрудничество с нами
                станет приятным для Вас и позволит создать лестницу вашей мечты.</p>
        </div>
        <div class="our_works">
            <p>НАШИ РАБОТЫ</p>
            <div id="slider_bottom" class="slider_bottom">
                <img src="images/slider/bottom/1.png" alt="">
                <img src="images/slider/bottom/2.png" alt="">
                <img src="images/slider/bottom/3.png" alt="">
                <img src="images/slider/bottom/4.png" alt="">
                <img src="images/slider/bottom/5.png" alt="">
                <img src="images/slider/bottom/6.png" alt="">
            </div>
        </div>

        <div class="callback">
            <p>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</p>
            <form action="">
                <input class="name_tel" type="text" name="name" required placeholder="Ваше имя">
                <input class="name_tel" type="tel"  name="tel" required placeholder="Телефон">
                <input class="send" type="submit" value="Отправить">
            </form>
        </div>

        <footer class="footer_index">
            <div>
                <p>Адрес:</p>
                <p>г. Брянск, ул. Спартаковская, 17</p>
            </div>
            <div>
                <p>Телефон</p>
                <a href="tel:+79206045778">+7 (920) 604-57-78</a>
            </div>
            <div>
                <p>E-mail:</p>
                <a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a>
            </div>
        </footer>
    </div>

@endsection
