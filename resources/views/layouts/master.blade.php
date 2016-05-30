<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="台中前端社群">
    <meta name="author" content="Jigsaw">
    <link rel="shortcut icon" href="{{ asset('ico/favicon.ico') }}">
    <meta property="og:title" content="台中前端社群" />
    <meta property="og:description" content="台中前端社群目標是提供台中或中部地區的前端工程師，網站設計師或後端工程師等網站 / App相關人員一個交流與學習的平台。透過這個平台讓中部地區的網站 / App的開發人員能夠向上提升與認識更多相同領域的夥伴的機會。" />
    <meta property="og:image" content="{{ asset('assets/og/f2e-logo.png') }}" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />

    <title>@yield('title')@台中前端社群</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nprogress.css') }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56489335-2', 'auto');
        ga('send', 'pageview');
    </script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.pjax.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/nprogress.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
