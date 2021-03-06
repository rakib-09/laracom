@extends('Template.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <table class="table cart-table">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <form action="cart/update" method="POST">
                    {{csrf_field()}}
            @if(isset($cartlists))
                @foreach($cartlists as $cart)

                <tr>
                    <td class="cart-item-image">
                        <a href="#">
                            <img src="<?php echo asset("storage/images/products/$cart->product_image")?>" alt="Image Alternative text" title="AMaze" width="100" height="150" />
                        </a>
                    </td>
                    <td><a href="/details/{{$cart->product_id}}">{{$cart->product_name_bangla}}</a>
                    </td>
                    <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                        <input type="text" name="cart-quantity" class="cart-quantity" value="{{$cart->product_quantity}}" /><i class="fa fa-plus cart-item-plus"></i>
                        <input type="hidden" value="{{$cart->id}}" name="cart_id[]" class="cart_id">
                        <input type="hidden" value="{{$cart -> product_price}}" name="cart_price[]" class="cart_price">
                    </td>
                    <td>Tk. {{$cart->product_price}}</td>
                    <td class="cart-item-remove">
                        <span><i class="fa fa-trash-o fa-3x delete_cart" id="{{$cart->id}}" style="color: red;"></i></span>
                    </td>
                </tr>

                @endforeach
                @else
                @foreach($cartlist_session as $cart)
                <tr>
                    <td class="cart-item-image">
                        <a href="#">
                            <img src="<?php echo asset("storage/images/products/".$cart['product_image'])?>" alt="Image Alternative text" title="AMaze" width="100" height="150" />
                        </a>
                    </td>
                    <td><a href="/details/{{$cart['product_id']}}">{{$cart['product_name_bangla']}}</a>
                    </td>
                    <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                        <input type="text" name="cart-quantity[]" class="cart-quantity" value="{{$cart['product_quantity']}}" /><i class="fa fa-plus cart-item-plus"></i>
                        <input type="hidden" value="{{$cart['id']}}" name="cart_id[]" class="cart_id">
                        <input type="hidden" value="{{$cart['product_price']}}" name="cart_price[]" class="cart_price">
                    </td>
                    <td>Tk. {{$cart['product_price']}}</td>
                    <td class="cart-item-remove">
                        <span><i class="fa fa-trash-o fa-3x delete_cart" id="{{$cart['id']}}" style="color: red; cursor: pointer;"></i></span>
                    </td>
                </tr>
                @endforeach
                @endif
                <tr>
                    <td colspan="5">
                        <button href="javascript:void(0)" class="btn btn-success updateCart" type="submit"> <i class="fa fa-refresh"></i> Update the cart</button>
                    </td>
                </tr>
                </form>
                </tbody>
            </table>

        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="cart-total-list">
                        <li><p><label><input type="checkbox" id="isWrap" name="wrapGift"> Gift wrap for 20 Tk.</label></p></li>
                        @php
                            $subTotal = 0;
                            if(isset($cartlists))
                            {
                            foreach ($cartlists as $cart)
                            {
                                $subTotal += $cart->product_price;
                            }
                            }
                            else{
                            foreach($cartlist_session as $cart)
                            {
                            $subTotal += $cart['product_price'];
                            }
                            }
                        @endphp
                        <li><span>Sub Total</span><span class="pull-right">Tk. {{$subTotal}}</span>
                        </li>
                        <li><span>Shipping</span><span class="pull-right">Tk. 40</span>
                        </li>
                        <li ><span>Total</span><span class="pull-right">Tk. {{$subTotal + 40}}</span>
                        </li>
                    </ul>
                    <a href="/checkout" class="btn btn-warning btn-lg"><i class="fa fa-flag-checkered"></i> Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="gap-big"></div>
@endsection