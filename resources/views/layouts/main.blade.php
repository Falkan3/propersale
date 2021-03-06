<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes-1.12.1/themes/smoothness/jquery-ui.min.css') }}"
          type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/framework.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.flexslider.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.bxslider.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all"/>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.stellar.js') }}"></script>
    <?php /*<script src="{{ URL::asset('js/jquery.nicescroll.js') }}"></script> */ ?>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <?php /*<script src="{{ URL::asset('js/npm.js') }}"></script>*/ ?>
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "Ta strona korzysta z ciasteczek aby świadczyć usługi na najwyższym poziomie. Dalsze korzystanie ze strony oznacza, że zgadzasz się na ich użycie.",
            "dismiss": "Zgoda",
            "learnMore": "Polityka cookies",
            "link": "http://www.propersale.pl/att/cookies",
            "theme": "dark-bottom"
        };
    </script>

    <script type="text/javascript"
            src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
</head>
<body id="top" class="zebra">
<!-- header -->
@include('main.header')

@yield('content')

@include('main.footer')

<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>

<script src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
<!-- IE9 Placeholder Support -->
<script src="{{ URL::asset('js/jquery.placeholder.min.js') }}"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific -->
<script src="{{ URL::asset('js/jquery.flexslider-min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('js/scrolling-nav.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mobile.custom.min.js') }}"></script>
<script src="{{ URL::asset('js/contactform.js') }}"></script>
<script src="{{ URL::asset('js/mainscript.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>

</body>
</html>