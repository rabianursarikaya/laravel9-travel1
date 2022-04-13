<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield("title")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontAwesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/light-box.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl-carousel.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
@include("home.header")
@include("home.sidebar")
@section('slider')
    @include('home.slider')
@show
<div class="page-content">
    @include('home._tourList')
</div>
@section('content')
@show
@include('home._footer')
</body>
</html>
