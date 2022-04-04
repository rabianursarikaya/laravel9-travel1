<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("title")</title>

    <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/fontawesome-free/css/all.min.css"  />

    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--CUSTOM BASIC STYLES-->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" >

    <!-- GOOGLE FONTS-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans'  type='text/css' >
    @yield("head")
</head>
<body class="hold-transition sidebar-mini">
<@include("admin.header")


@section('sidebar')
    <@include("admin.sidebar")


@show

@yield('content')

<@include("admin.footer")
@yield('foot')


</body>
</html>
