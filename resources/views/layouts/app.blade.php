<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

@include('left_nav')

<div class="main">

 @yield('main-content')

</div>

    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>



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

</body>
</html>