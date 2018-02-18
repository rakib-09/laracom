@extends('Template.master')
@include('Template.top_area')
@section('content')
    <div class="row">
        @include('Template.sidebar')
        <div class="col-md-9">
            <h1 class="mb20 text-center">Weekly Featured <small><a href="#">View All</a></small></h1>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Ana 29" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Hot Summer Collection</h5>
                            <p class="product-desciption">Nibh imperdiet nascetur inceptos maecenas suscipit natoque diam</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$69</span>
                                    </li>
                                    <li><span class="product-old-price">$224</span>
                                    </li>
                                    <li><span class="product-save">Save 31%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/800x600.png" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.4/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Finshing in Maldives</h5>
                            <p class="product-desciption">Nibh imperdiet nascetur inceptos maecenas suscipit natoque diam</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$176</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Hot mixer" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Modern DJ Set</h5>
                            <p class="product-desciption">Nibh imperdiet nascetur inceptos maecenas suscipit natoque diam</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$276</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
    <div class="row row-wrap">
        <div class="col-md-4">
            <div class="product-banner">
                <img src="img/800x600.png" alt="Image Alternative text" title="Gamer Chick" />
                <div class="product-banner-inner">
                    <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-banner">
                <img src="img/800x600.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                <div class="product-banner-inner">
                    <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-banner">
                <img src="img/800x600.png" alt="Image Alternative text" title="AMaze" />
                <div class="product-banner-inner">
                    <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
    <h1 class="mb20 text-center">New Arrivals <small><a href="#">View all</a></small></h1>
    <div class="row row-wrap">
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header"><span class="product-label label label-danger">Hot</span>
                    <img src="img/800x600.png" alt="Image Alternative text" title="Aspen Lounge Chair" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating" title="3.8/5 rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Aspen Lounge Chair</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$55</span>
                            </li>
                            <li><span class="product-old-price">$137</span>
                            </li>
                            <li><span class="product-save">Save 40%</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-image"></i>furniture</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating" title="4.4/5 rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-half-empty"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Beach Holidays</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$98</span>
                            </li>
                            <li><span class="product-old-price">$208</span>
                            </li>
                            <li><span class="product-save">Save 47%</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Hot mixer" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating" title="3.6/5 rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Modern DJ Set</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$214</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header"><span class="product-label label label-warning">Best Seller</span>
                    <img src="img/800x600.png" alt="Image Alternative text" title="Food is Pride" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Best Pasta</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$68</span>
                            </li>
                            <li><span class="product-old-price">$129</span>
                            </li>
                            <li><span class="product-save">Save 53%</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-cutlery"></i>food & drink</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="a turn" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating" title="5/5 rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Diving with Sharks</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$112</span>
                            </li>
                            <li><span class="product-old-price">$272</span>
                            </li>
                            <li><span class="product-save">Save 41%</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating" title="3.8/5 rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$180</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-image"></i>furniture</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="AMaze" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">New Glass Collection</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$224</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-umbrella"></i>fashion</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-thumb">
                <header class="product-header"><span class="product-label label label-success">New</span>
                    <img src="img/800x600.png" alt="Image Alternative text" title="cascada" />
                </header>
                <div class="product-inner">
                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-title">Adventure in Woods</h5>
                    <p class="product-desciption">Auctor netus lacinia dignissim dictum sodales tempus proin</p>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$112</span>
                            </li>
                        </ul>
                        <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                        <ul class="product-actions-list">
                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                            </li>
                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    <div class="row row-wrap">
        <div class="col-md-4">
            <div class="sale-point"><i class="fa fa-truck sale-point-icon"></i>
                <h5 class="sale-point-title">Fast & Free Shipping</h5>
                <p class="sale-point-description">Ridiculus a cum ligula interdum vitae placerat purus phasellus porttitor ligula egestas diam ullamcorper senectus</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sale-point"><i class="fa fa-tags sale-point-icon"></i>
                <h5 class="sale-point-title">Best Discounts</h5>
                <p class="sale-point-description">Habitasse volutpat sociis non congue potenti cursus dapibus vel lectus cras gravida suspendisse ridiculus lobortis</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sale-point"><i class="fa fa-money sale-point-icon"></i>
                <h5 class="sale-point-title">Guaranteed Refund</h5>
                <p class="sale-point-description">Luctus facilisi scelerisque iaculis ipsum eget congue nec malesuada convallis scelerisque facilisi natoque venenatis lobortis</p>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
    </div>

@endsection
