<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield("title")</title>

    <!--

    Sentra Template

    https://templatemo.com/tm-518-sentra

    -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/light-box.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>



<html>
<head>
    <title>App Name - @yield('title')</title>
    @yield('head')
</head>
<body>
<@include("home.header")


@section('sidebar')
    <@include("home.sidebar")

@show

@section('slider')

@show

    @yield('content')

<@include("home.footer")
@yield('foot')
</body>
</html>
