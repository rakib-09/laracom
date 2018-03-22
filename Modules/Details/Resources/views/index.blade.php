@extends('Template.master')

@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-2">
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body">--}}
                    <div class="frame">
                        <span style="color: black;">বই এর মলাটে ক্লিক করে কিছু অংশ পড়ে নিন</span>
                        <div class="book">
                            <a href="#">
                                <ul>
                                    <li class="page page3"></li>
                                    <li class="page page2"></li>
                                    <li class="page page1"></li>
                                    <li class="cover"><a href="https://drive.google.com/open?id={{$product->ext_link}}" target="_blank"><img src="<?php echo asset("storage/images/products/$product->image")?>" alt="" height="300" width="200"></a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-6">
            <h2>{{$product->bangla_name}}</h2>
            <h4>{{$product->writer_bangla}}</h4>
            <code class="col-md-12">
                <div class="col-md-6">
                    <p>
                        <span class="priceLabel">Our Price: </span>
                        <span class="mainPrice">Tk.{{$product->price - ($product->price* $product->discount/100)}}</span>
                        <span class="priceOff">({{$product->discount}}% OFF)</span>
                    </p>
                    <p><span class="priceLabel">Regular Price: </span> <span class="actualPrice">Tk. {{$product->price}}</span> </p>
                    <p><span class="priceLabel">Shipping: </span><span class="shippingPrice">Tk. 30</span></p>
                </div>
            </code>
            <div class="col-md-12" style="margin:2% 0;">
                <div class="cart-item-quantity col-md-6">
                    <i class="fa fa-minus cart-item-minus"></i>
                    <input type="number" min="1" name="quantity" value="1" class="qty proQty" id="proQty">
                    <i class="fa fa-plus cart-item-plus"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-heart"></i> Add to Wishlist</a>
                </div>
                <div class="col-md-5">
                    <a href="#" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-10 product_description">
            <h2>বইটি সম্পর্কে কিছু কথা</h2>
            <p>{{$product->description}}</p>
        </div>
        <div class="col-md-10 col-md-offset-1 product_review">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>আপনার মতামত দিনঃ</h1>
                    <p>আপনার মতামত আমাদের কাছে সবচেয়ে গুরুত্বপূর্ণ</p>
                    <div class="comments">
                        @guest
                        <h2>মতামত দেয়ার জন্য লগইন করুন <a href="/login">এখানে</a></h2>
                        @else
                        <div class="comment-wrap">
                            <div class="photo">
                                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
                            </div>
                            <div class="comment-block">
                                <form action="">
                                    <textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
                                    <a href="#" class="btn btn-success"><i class="fa fa-file-text"></i> Post Comment</a>
                                </form>
                            </div>
                        </div>

                        <div class="comment-wrap">
                            <div class="photo">
                                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
                            </div>
                            <div class="comment-block">
                                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
                                    sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
                                <div class="bottom-comment">
                                    <div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-wrap">
                            <div class="photo">
                                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>
                            </div>
                            <div class="comment-block">
                                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>
                                <div class="bottom-comment">
                                    <div class="comment-date">Aug 23, 2014 @ 10:32 AM</div>
                                </div>
                            </div>
                        </div>
                            @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-agreement">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <object type="application/pdf" data="path/to/pdf" width="100%" height="500" style="height: 85vh;">No Support</object>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    @include('details::layouts.master')
    <script>
        $(document).ready(function(){
            $(".cart-item-minus").on('click',function(){
                var qty = $(".proQty").val();
                if(qty == 1)
                {
                    alert('lowest limit reached');
                }
                else {
                    $(".proQty").val(qty - 1);
                }

            });

            $('.cart-item-plus').on('click',function(){
                var qty = $('.proQty').val();

                $('.proQty').val(parseInt(qty) + 1);
            });
        });

    </script>
@endsection