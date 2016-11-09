<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/tabs-style.css">
    <link rel="stylesheet" type="text/css" href="css/easydropdown.css">
    <link rel="stylesheet" type="text/css" href="css/easydropdown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

@include('left_nav')

<div class="main">
    <header class="header">
        <a class="phone" href="tel:+79206045778">+7 (920) 604-57-78</a>
        <div class="addres">
            <p>г. Брянск, ул. Спартаковская, 17</p>
        </div>
        <div class="mail"><a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a></div>
        <a class="order" href="calculation"><em>Заказать расчёт</em></a>
    </header>

    @yield('center')

    <footer class="footer">
        <p><span>Адрес:</span> г. Брянск, ул. Спартаковская, 17</p>
        <p>Телефон: <a href="tel:+79206045778">+7 (920) 604-57-78</a></p>
        <p>E-mail: <a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a></p>
    </footer>

</div>

<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/dm-tabs.js"></script>
<script type="text/javascript" src="js/jquery.easydropdown.js"></script>

@yield('footer')

<script type="text/javascript">
    $("#stairs_type td").mouseover(function() {
        var tds = $( this ).parent().find("td"),
                index = $.inArray( this, tds );

        $("#stairs_type .table_cell:nth-child("+( index + 1 )+")").css("background-color", "#f6efee");
    }).mouseout(function() {
        var tds = $( this ).parent().find("td"),
                index = $.inArray( this, tds );

        $("#stairs_type .table_cell:nth-child("+( index + 1 )+")").css("background-color", "#fff");
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#slider_top').slick({
            infinite: true,
            dots: true
        });

    });

    $(document).ready(function(){
        $('#slider_bottom').slick({
            infinite: true,
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1
        });

    });
</script>

<script>
    $(document).ready(function() {
        $(".up").hide();
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('.up').fadeIn();
                } else {
                    $('.up').fadeOut();
                }
            });
            $('.up a').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
    });
</script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap,
            myPlacemark;

    function init(){
        myMap = new ymaps.Map("map", {
            center: [53.224859, 34.352843],
            zoom: 16
        });

        myPlacemark = new ymaps.Placemark([53.224859, 34.352843], {
            hintContent: 'Лестница-Стиль'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>

</body>
</html>