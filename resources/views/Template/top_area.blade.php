@extends('template.master')

@section('top_area')
<div class="top-area">
    <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
        <div>
            <div class="bg-holder">
                <img src="{{asset('img/1200x480.png')}}" alt="Image Alternative text" title="Branding  iPad Interactive Design" />
                <div class="vert-center text-white text-center slider-caption">
                    <h2 class="text-uc">New Bloke Collection</h2>
                    <p class="text-bigger">Egestas et est aenean ipsum lorem fringilla</p>
                    <p class="text-hero">Save up to 30%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-holder">
                <img src="{{asset('img/1200x480.png')}}" alt="Image Alternative text" title="Hot mixer" />
                <div class="vert-center text-white text-center slider-caption">
                    <h2 class="text-uc">Modern DJ Sets</h2>
                    <p class="text-bigger">Justo cursus ridiculus erat et varius est</p>
                    <p class="text-hero">Save up to 70%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-holder">
                <img src="{{asset('img/1200x480.png')}}" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                <div class="vert-center text-white text-center slider-caption">
                    <h2 class="text-uc">Gatgets Giveaway</h2>
                    <p class="text-bigger">Erat lacus praesent montes aptent eget venenatis</p>
                    <p class="text-hero">Save up to 30%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP AREA -->

<!-- SEARCH AREA -->
<form class="search-area form-group">
    <div class="container">
        <div class="row">
            <div class="col-md-8 clearfix">
                <label><i class="fa fa-search"></i><span>I am searching for</span>
                </label>
                <div class="search-area-division search-area-division-input">
                    <input class="form-control" type="text" placeholder="Travel Vacation" />
                </div>
            </div>
            <div class="col-md-3 clearfix">
                <label><i class="fa fa-map-marker"></i><span>In</span>
                </label>
                <div class="search-area-division search-area-division-location">
                    <input class="form-control" type="text" placeholder="Boston" />
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>
<!-- END SEARCH AREA -->
@endsection