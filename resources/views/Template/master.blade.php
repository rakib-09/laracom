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
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{--<link href="{{asset('css/app.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('css/all.css')}}" rel="stylesheet">--}}
    {{--<!-- Google fonts -->--}}
    <link href="{{asset('css/solaimanLipi.css')}}" rel="stylesheet">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- IE 8 Fallback -->
    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{asset('css/mystyles.css')}}">

</head>

<body>


<div class="global-wrap">

    @include('Template.header')
    @yield('top_area')
    <!-- SEARCH AREA -->
        <form class="search-area form-group" >
            <div class="container" id="app">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <label><i class="fa fa-search"></i><span>আমি যা খুজছি  </span>
                        </label>
                        <ul class="search-area-division search-area-division-input">
                            <ais-index app-id="{{ config('scout.algolia.id') }}"
                                       api-key="{{ env('ALGOLIA_SECRET') }}"
                                       index-name="products">
                                <ais-input class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="text" placeholder="বইয়ের নাম অথবা লেখকের নাম লিখুন" id="search-index"></ais-input>
                                <ul class="dropdown-menu">
                                <ais-results>
                                    <template scope="{ result }">
                                            <li><a href="#" title="Select this card"><img :src="result.image">
                                                    <span class="product_name">@{{ result.name }}</span>
                                                       <span class="writer"> @{{ result.writer}}</span>
                                                    <span class="price" > Price: @{{ result.price }}</span>
                                                </a>
                                            </li>
                                    </template>
                                </ais-results>
                                </ul>
                            </ais-index>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END SEARCH AREA -->
    <div class="gap"></div>
    <div class="container">
        @yield('content')
    </div>
    @include('Template.footer')

    <!-- Scripts queries -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
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
    {{--<script src="{{asset('js/card-payment.js')}}"></script>--}}
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/masonry.js')}}"></script>
    <script src="{{asset('js/nicescroll.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('script')

</body>

</html>
