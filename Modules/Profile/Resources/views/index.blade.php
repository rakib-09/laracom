@extends('Template.master')
@section('content')
    @include('profile::layouts.master')
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-6 settings_details info">
                @if (Session::has('passwordChangeStatusYes'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('passwordChangeStatusYes') }}
                    </div>
                @endif
                @if (Session::has('passwordChangeStatusNo'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('passwordChangeStatusNo') }}
                    </div>
                @endif
                <form action="/profile/updateinfo" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control" value="{{$userInformation->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">ই-মেইল</label>
                        <input type="text" class="form-control" value="{{$userInformation->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">ফোন নাম্বার</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->phone}}" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">জন্ম তারিখ</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->dob}}" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="">ঠিকানা</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->address}}" name="address">
                    </div>
                    <div class="form-group">
                        <label for="">শহর</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->city}}" name="city">
                    </div>
                    <div class="form-group">
                        <label for="">দেশ</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->country}}" name="country">
                    </div>
                    <div class="form-group">
                        <label for="">পোস্টাল কোড</label>
                        <input type="text"  class="form-control" value="{{$userInformation->userInfo()->postalcode}}" name="postalcode">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6 password_details info">
                <form action="./passwordchange" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">পূর্বের পাসওয়ার্ড</label>
                        <input type="password" class="form-control" name="old_password">
                    </div>
                    <div class="form-group">
                        <label for="">নতুন পাসওয়ার্ড</label>
                        <input type="password" class="form-control newPass" name="new_password">
                    </div>
                    <div class="form-group">
                        <label for="">নতুন পাসওয়ার্ড(আবার)</label>
                        <input type="password"  class="form-control checkPass" >
                    </div>
                    <span class="checkResult" style="display: none; color:red;">No Match</span>

                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-9 order_details info">
                <form action="">
                    <table class="table table-order">
                        <thead>
                        <tr>
                            <th>Invoice No.</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Send As a Gift</th>
                            <th>Order At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userInvoices as $invoice)
                        <tr>
                            <td>{{$invoice-> id}}</td>
                            <td>{{$invoice-> Sub_total}}</td>
                            <td>{{$invoice-> status}}</td>
                            <td>@if($invoice->send_gift == 0)
                                    NO
                                @else
                                    YES
                                @endif
                            </td>
                            <td>{{$invoice->created_at->format('d-m-Y')}}</td>
                            <td><!-- Button trigger modal -->
                                <button type="button" id="{{$invoice->id}}" class="btn btn-primary seeDetails" >
                                    See Details
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="invoice-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Invoice Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-order popupTable">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div></td>
                            {{--<td class="table-order-img">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td><a href="#">{{$invoice->order_info()->product_name}}</a>--}}
                            {{--</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>$220</td>--}}
                            {{--<td>7/12/2014</td>--}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
            $(".checkPass").on('keyup', function(){
               if($(".newPass").val() === $(this).val())
               {
                   $(".checkResult").html('Match');
                   $(".checkResult").css('display','block');
               }
               else{
                   $(".checkResult").css('display','block');
               }

            });
        });
    </script>
    @endsection
