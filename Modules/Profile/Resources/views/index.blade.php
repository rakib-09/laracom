@extends('Template.master')
@section('content')
    @include('profile::layouts.master')
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-6 settings_details info">
                <form action="">
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ই-মেইল</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ফোন নাম্বার</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">জন্ম তারিখ</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ঠিকানা</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 password_details info">
                <form action="">
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ই-মেইল</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ফোন নাম্বার</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 order_details info">
                <form action="">
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control">
                    </div>

                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 rating_details info">
                <form action="">

                    <div class="form-group">
                        <label for="">জন্ম তারিখ</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ঠিকানা</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 review_details info">
                <form action="">
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ই-মেইল</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ফোন নাম্বার</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 wishlist_details info">
                <form action="">
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ঠিকানা</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="gap"></div>
    </div>
@endsection
@section('script')
    <style>
    .info{ display: none;}
    .settings_details{display: block;}
    </style>
    <script>
        $(document).ready(function(){


            $("li.settings").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
            $("li.password").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
            $("li.order").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
            $("li.rating").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
            $(".review").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
            $("li.wishlist").on('click',function(){
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $('.info').fadeOut('fast');
                $('.' + $(this).data('rel')).fadeIn('slow');
            });
        });
    </script>
    @endsection
