<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
{!! Html::style('css/font-awesome.css') !!}
{!! Html::style('css/bootstrap.min.css') !!}


<!-- Css animations  -->
{!! Html::style('css/animate.css') !!}

<!-- Theme stylesheet, if possible do not edit this stylesheet
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">-->
{!! Html::style('css/style.default.css') !!}

<!-- Custom stylesheet - for your changes -->
{!! Html::style('css/custom.css') !!}

<!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->
    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/owl.theme.css') !!}
    {!! Html::style('css/main.css') !!}


</head>
<body>

@include("Templeta.partials.navbar")
@include('templeta.partials.titulos.titulo2')
@yield('body')

@include('templeta.partials.copyright')


{!! Html::script('js/jquery-1.11.0.min.js') !!}
<script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
</script>
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.cookie.js') !!}
{!! Html::script('js/waypoints.min.js') !!}
{!! Html::script('js/jquery.counterup.min.js') !!}
{!! Html::script('js/jquery.parallax-1.1.3.js') !!}
{!! Html::script('js/front.js') !!}

<!-- owl carousel -->
{!! Html::script('js/owl.carousel.min.js') !!}

<!-- gmaps -->

<script>
    var map;
    function initMap() {
        var myLatLng = {lat: 19.272202, lng: -103.715257};
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 18
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKaYioWdYrAhInUe2uhgwNZztqXiPViOQ&callback=initMap" async defer></script>

<!-- gmaps end -->

<!-- gmaps end -->

@yield('scripts')
</body>
</html>