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
                                    <li class="cover"><img src="https://about.canva.com/wp-content/uploads/sites/3/2015/01/children_bookcover.png" alt="" height="300px" width="200px"></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-6">
            <h2>হীরক রাজার দেশে</h2>
            <h4>সত্যজিৎ রায়</h4>
            <code class="col-md-12">
                <div class="col-md-6">
                    <p>
                        <span class="priceLabel">Our Price: </span>
                        <span class="mainPrice">Tk. 150</span>
                        <span class="priceOff">(25% OFF)</span>
                    </p>
                    <p><span class="priceLabel">Regular Price: </span> <span class="actualPrice">Tk. 200</span> </p>
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
            <p>জীবন থেকে নেয়া!
                আমাদের জীবনটা আসলেও অনেক জটিল। প্রতিটা মুহূর্তে অনেক ওঠা নামা আমাদের।এই মন ভালো তো এই মন খারাপ। জীবনে আমরা যখন অনেক কষ্টে আর হতাশায় থাকি, আমরা চাই কেউ আমাদের পাশে বসে আমাদের একটু সময় দিক, একটু আমাদের কথাগুলো শুনুক। ভালো হোক মন্দ হোক; এমনকি মিথ্যে হলেও একটু ভরসা দিক। আমরা সব সমস্যার সমাধান চাই না, কিন্তু আমরা একটু সঙ্গ চাই, একটু অনুভব করতে চাই, কেউ আমাকে বোঝার চেষ্টা করছে।
                আমি আমার নিজের জীবন থেকে এই জিনিসগুলো শিখেছি। স্কুল জীবনে দীর্ঘ ১০ বছর আমি আমার চেহারা আর শারীরিক গড়ন নিয়ে অনেক নির্মম উপহাস আর কৌতুকের সম্মুখীন হয়েছিলাম। স্কুলের একটা বড় সময় কাটে হোস্টেলে। আমার হোস্টেলে পুরুষত্ব আর ব্যক্তিত্বকে প্রশ্নবিদ্ধ করে এমন অনেক হ্যারাসমেন্টের শিকার হই আমি।
                সেখান থেকে কলেজে উঠে নিজেকে হাসির পাত্রে পরিণত করতে না চাওয়ায় নিজেকে একজন দুরন্ত কিশোর হিসেবে প্রমাণ করতে বদ্ধপরিকর হই। আমি দেখতাম, বন্ধুমহলে চূড়ান্ত মাত্রায় জনপ্রিয় হতে হলে শিক্ষক আর শিক্ষিকাদের নিয়ে একটু রসালো-কথন ছাড়া আর কোনও উপায় নেই। কথিত আছে, মহাকবি ফেরদৌসি এক রাতে ‘শাহনামা’-এর ষাট হাজার স্তবক লিখেন। আর আমিকলেজের প্রিন্সিপাল স্যার আর ম্যাডামকে নিয়ে ষাট লাইনের প্রেমের কবিতা লিখে ফেলি। কলেজের ছয় তলা হোস্টেলের দেয়াল ছিলো আমার লেখার কাগজ। প্রতি তলার দেয়ালে ১০ লাইন করে মোট ৬০ লাইন আমি লিখি। ফলস্বরুপ কলেজ থেকে বহিষ্কৃত হয়ে যাই। ২০০৯ সালের ৯ নভেম্বর সকাল ১০:৩২এআমার বাবা মাথা নিচু করে আমাকে কলেজ থেকে নিয়ে আসেন।
                এরপর আমার মফস্বলের একটা কলেজে বাবা-মা, ছোট ভাই থেকে দূরে থেকে কলেজ জীবনটা কোনও মতে শেষ করি। বিশ্ববিদ্যালয়ে উঠে নিজের দায়িত্বজ্ঞানহীনতার দরুণ এক বছর আমার নষ্ট হয়। বাবা-মা আসলে তাদের সন্তানের কাছে খুব বেশি কিছু চান না। মাত্র দুইটা জিনিস তারা চান।
                •	তাদের ছেলে যাতে একটা ‘ভালো ছেলে’ হয়
                •	তাদের ছেলে যাতে একটা ‘ভালো ছাত্র’ হয়
                আমার কলেজে বহিষ্কারের কারণে আমি আমার বাবা-মায়ের ভালো ছেলের স্বপ্নটা ভেঙ্গে দেই। বিশ্ববিদ্যালয়ে উঠে ইয়ার ড্রপের ঘটনা, ভালো ছাত্রের ২য় প্রত্যাশাটাও শেষ করে দেয়। এই ২টা নোটিশ যেদিন আমার বাসায় আসে, তখন আমার আম্মু জানার পর তার প্রেশার উঠে যায়। নিজেকে অনেক অপরাধী লাগতো। সবার জন্য বোঝা মনে হতো। আমার পাশের বাসার আংকেল আন্টিরা তাদের ছেলে-মেয়েদের সাথে আমাকে মিশতে দিতেন না। আমার ছোট ভাই কোনও বিষয়ে দুষ্টামি করলে আমাকে আলাদা রুমে বলা হতো, তোমার কু-প্রভাবেই তোমার ছোট ভাই নষ্ট হচ্ছে। দিনের পর দিন কষ্টগুলো পেয়ে শুধু সমাধান খুঁজতাম। সব কষ্টগুলোর একটাই সমাধান আমার মাথায় ছিলো।
                “জীবন শেষ তো জীবনের সব না পাওয়া,জটিলতা, সমস্যা সব শেষ!”</p>
        </div>
        <div class="col-md-10 col-md-offset-1 product_review">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>আপনার মতামত দিনঃ</h1>
                    <p>আপনার মতামত আমাদের কাছে সবচেয়ে গুরুত্বপূর্ণ</p>
                    <div class="comments">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
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