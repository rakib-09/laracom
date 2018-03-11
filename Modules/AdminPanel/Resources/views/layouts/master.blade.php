<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminPanel</title>
        <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
        <!-- Font Awesome styles (icons) -->
        <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/adminpanel.css')}}">
        <link rel="stylesheet" href="{{asset('css/solaimanLipi.css')}}">
    </head>
    <body><div id="throbber" style="display:none; min-height:120px;"></div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> professor's publictions</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Contact Us</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-collapse -->
    </nav>
    <!------------- MAIN PAGE CONTENT AREA --------->
    <div class="site-panel"style="margin-top:110px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 well">
                    <div class= "sidebar">
                        <div class="list-group">
                            <a href="/addproduct" class="list-group-item active"><i class="fa fa-plus-circle"></i> প্রোডাক্ট অ্যাড করুন</a>
                            <a href="#" class="list-group-item"><i class="fa fa-star"></i> প্রোডাক্ট র‍্যাঙ্কিং</a>
                            <a href="#" class="list-group-item"><i class="fa fa-home"></i> হোমপেজ ডিজাইন</a>
                            <a href="#" class="list-group-item"><i class="fa fa-user"></i> কাস্তমার লিস্ট</a>
                            <a href="#" class="list-group-item"><i class="fa fa-shopping-cart"></i> অর্ডার হিস্টোরি</a>
                            <a href="#" class="list-group-item"><i class="fa fa-list-ul"></i> অর্ডার স্ট্যাটাস</a>
                            <a href="#" class="list-group-item"><i class="fa fa-money"></i> সর্বমোট বিক্রয় হিসাব</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 ">
                    <div class= "content-box well">
                        @isset($adminTitle)
                        <legend>
                            {{$adminTitle}}
                        </legend>
                        @endisset
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/boostrap.min.js')}}"></script>
    <script src="{{asset('js/imageupload.js')}}"></script>
    @yield('style_script')
    </body>
</html>
