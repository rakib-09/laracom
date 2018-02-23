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
                <tr>
                    <td class="cart-item-image">
                        <a href="#">
                            <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                        </a>
                    </td>
                    <td><a href="#">রহিমের দিনরাত্রি</a>
                    </td>
                    <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                        <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                    </td>
                    <td>$150</td>
                    <td class="cart-item-remove">
                        <a class="fa fa-times" href="#"></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart-item-image">
                        <a href="#">
                            <img src="img/70x70.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        </a>
                    </td>
                    <td><a href="#">মাশরাফি বিন মর্তুজা</a>
                    </td>
                    <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                        <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                    </td>
                    <td>$200</td>
                    <td class="cart-item-remove">
                        <a class="fa fa-times" href="#"></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart-item-image">
                        <a href="#">
                            <img src="img/70x70.png" alt="Image Alternative text" title="Old No7" />
                        </a>
                    </td>
                    <td><a href="#">হাউজফুল(ফুল এপিসোড)</a>
                    </td>
                    <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                        <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                    </td>
                    <td>$150</td>
                    <td class="cart-item-remove">
                        <a class="fa fa-times" href="#"></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <a href="#" class="btn btn-success"> <i class="fa fa-refresh"></i> Update the cart</a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="cart-total-list">
                        <li><p><label><input type="checkbox" id="isWrap" name="wrapGift"> Gift wrap for 20 Tk.</label></p></li>
                        <li><span>Sub Total</span><span class="pull-right">$500.00</span>
                        </li>
                        <li><span>Shipping</span><span class="pull-right">$0.00</span>
                        </li>
                        <li ><span>Total</span><span class="pull-right">$500.00</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-warning btn-lg"><i class="fa fa-flag-checkered"></i> Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="gap-big"></div>
@endsection