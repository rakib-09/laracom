<!DOCTYPE HTML>
<html lang="bn">
<head>
    <title>Professor's Publications</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="ecommerce, professor's publications," />
    <meta name="description" content="Professor's publications ecommerce Website">
    <meta name="author" content="Rakib">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- IE 8 Fallback -->
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{asset('css/mystyles.css')}}">

</head>

<body>


<div class="global-wrap">

    @include('Template.header')
    @yield('top_area')
    <div class="gap"></div>
    <div class="container">
        @yield('content')
    </div>
    @include('Template.footer')

    <!-- Scripts queries -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/boostrap.min.js')}}"></script>
    <script src="{{asset('js/countdown.min.js')}}"></script>
    <script src="{{asset('js/flexnav.min.js')}}"></script>
    <script src="{{asset('js/magnific.js')}}"></script>
    <script src="{{asset('js/tweet.min.js')}}"></script>
    <script src="{{asset('js/fitvids.min.js')}}"></script>
    <script src="{{asset('js/mail.min.js')}}"></script>
    <script src="{{asset('js/ionrangeslider.js')}}"></script>
    <script src="{{asset('js/icheck.js')}}"></script>
    <script src="{{asset('js/fotorama.js')}}"></script>
    <script src="{{asset('js/card-payment.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/masonry.js')}}"></script>
    <script src="{{asset('js/nicescroll.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('script')

</div>
</body>

</html>
