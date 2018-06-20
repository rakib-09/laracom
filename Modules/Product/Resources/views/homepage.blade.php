@extends('adminpanel::layouts.master')
@section('content')
    <div class="col-md-12">
        <form id="uploadform" action="/product/addproduct" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Slider Image 1 </h4>
                </div>
                <div class="col-md-8"><input type="file" class="form-control" name ="slider1" accept="image/*" required></div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Slider Image 2 </h4>
                </div>
                <div class="col-md-8"><input type="file" class="form-control" name ="slider2" accept="image/*" required></div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Slider Image 3 </h4>
                </div>
                <div class="col-md-8"><input type="file" class="form-control" name ="slider3" accept="image/*" required></div>
            </div>
        </form>
    </div>
@endsection