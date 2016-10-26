<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes-1.12.1/themes/smoothness/jquery-ui.min.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontawesome-4.3.0.min.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/framework.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.flexslider.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all"/>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.stellar.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/npm.js') }}"></script>
</head>
<body id="top">
<!-- header -->
@include('main.header')

@yield('content')

@include('main.footer')

<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>

<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
<!-- IE9 Placeholder Support -->
<script src="{{ URL::asset('js/jquery.placeholder.min.js') }}"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific -->
<script src="{{ URL::asset('js/jquery.flexslider-min.js') }}"></script>

</body>
</html>