<div class="top-main-area text-center">
    <div class="container">
        <a href="index.html" class="logo mt5">
            <img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title" />
        </a>
    </div>
</div>
<header class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        <li class="active"><a href="index.html">হোম</a> </li>
                        <li><a href="category-page-shop.html">বই সমূহ</a></li>
                        <li><a href="product-shop-sidebar.html">লেখক </a></li>
                        <li><a href="features-typography.html">অনুবাদক</a></li>
                        <li><a href="blog-sidebar-right.html">যোগাযোগ</a></li>
                        <li><a href="page-full-width.html">আমাদের স্বপ্ন</a></li>
                    </ul>
                </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
            <div class="col-md-6">
                <!-- LOGIN REGISTER LINKS -->
                <ul class="login-register">
                    <li class="shopping-cart"><a href="page-cart.html"><i class="fa fa-shopping-cart"></i>My Cart</a>
                        <div class="shopping-cart-box">
                            <ul class="shopping-cart-items">
                                <li>
                                    <a href="product-shop-sidebar.html">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                                        <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="product-shop-sidebar.html">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="Gamer Chick" />
                                        <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline text-center">
                                <li><a href="page-cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                </li>
                                <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                    </li>
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>
    <h3>সাইন ইন</h3>
    <h5>স্বাগতম</h5>
    <form class="dialog-form">
        <div class="form-group">
            <label>ই-মেইল</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>পাসওয়ার্ড</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <input type="submit" value="Sign in" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
        </li>
    </ul>
</div>


<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-edit dialog-icon"></i>
    <h3>সাইন আপ</h3>
    <h5>আমাদের সাথে চলতে প্রস্তুত ?? এখনই সাইন আপ করুন</h5>
    <form class="dialog-form">
        <div class="form-group">
            <label>ই-মেইল</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>পাসওয়ার্ড</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <div class="form-group">
            <label>রিপিট পাসওয়ার্ড</label>
            <input type="password" placeholder="Type your password again" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>আপনার এলাকা</label>
                    <input type="password" placeholder="Boston" class="form-control">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">ই-মেইল এ কি আমাদের অফার পেতে চান ?
            </label>
        </div>
        <input type="submit" value="Sign up" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
        </li>
    </ul>
</div>


<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>
    <h3>পাসওয়ার্ড পুনরুদ্ধার</h3>
    <h5>পাসওয়ার্ড ভুলে গেছেন ? চিন্তা নেই আমরা আছি তো !!</h5>
    <form class="dialog-form">
        <label>E-mail</label>
        <input type="text" placeholder="email@domain.com" class="span12">
        <input type="submit" value="Request new password" class="btn btn-primary">
    </form>
</div>