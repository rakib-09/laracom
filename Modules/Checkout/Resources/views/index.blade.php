@extends('Template.master')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <aside class="sidebar-left">
                <div class="box clearfix">
                    <table class="table cart-table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartlists as $cart)
                        <tr>
                            <td>{{$cart->product_name_bangla}}</td>
                            <td>{{$cart->product_quantity}}</td>
                            <td>Tk. {{$cart->product_price}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @php
                        $subTotal = 0;
                        foreach ($cartlists as $cart)
                        {
                            $subTotal += $cart->product_price;
                        }
                    @endphp
                    <ul class="cart-total-list text-center mb0">
                        <li><span>Sub Total</span><span>Tk. {{$subTotal}}</span>
                        </li>
                        <li><span>Shipping</span><span>Tk. 40</span>
                        </li>
                        {{--<li><span>Taxes</span><span>$0.00</span>--}}
                        {{--</li>--}}
                        <li><span>Total</span><span>Tk. {{$subTotal + 40}}</span>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            @guest
            hello guest
            @endguest
            {{--<p class="mb20"><a href="#">Login</a> or <a href="#">Register</a> for faster payment.</p>--}}
            <div class="row">
                <form action="">
                    <div class="col-md-6">
                        <p><label><input type="checkbox" id="isWrap" name="wrapGift"> Send as a Gift.</label></p>
                        <legend>Personal Information</legend>
                        <div class="form-group">
                            <label for="">নাম</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">ফোন নাম্বার</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">ই-মেইল</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{--<div class="col-md-5 col-md-offset-1">--}}
                        {{--<h3>Pay Via Paypal</h3>--}}
                        {{--<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Checkout via Paypal</a>--}}
                    {{--</div>--}}
                    <div class="col-md-5 col-md-offset-1">
                        <legend>Address</legend>
                        <div class="form-group">
                            <label for="">দেশ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">শহর</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">ঠিকানা</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">পোস্টাল কোড</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg"><i class="fa fa-save"></i> Confirm Order</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="gap"></div>
    </div>
@endsection