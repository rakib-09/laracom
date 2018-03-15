@extends('adminpanel::layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="col-md-4">
            <h4>Upload Image</h4>
        </div>
        <form id="uploadform" action="/product/addproduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8" style="max-width: 650px; margin: auto;">

                <div id="image-preview-div" style="display: none">
                    <label for="exampleInputFile">Selected image:</label>
                    <br>
                    <img id="preview-img" src="">
                </div>
                <div class="form-group">
                    <input type="file" name="product_image" id="file" required>
                </div>
                {{--<button class="btn btn-primary" id="upload-button" type="submit" disabled>Upload image</button>--}}
                <br>
                {{--<div class="alert alert-info" id="loading" style="display: none;" role="alert">--}}
                {{--Uploading image...--}}
                {{--<div class="progress">--}}
                {{--<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div id="message"></div>--}}
            </div>
            <div class="col-md-4">
                <h4>পণ্যের নাম(English) </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>পণ্যের নাম(বাংলা) </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>লেখকের নাম(English) </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>লেখকের নাম(বাংলা) </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>প্রকাশক </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>পণ্যের দাম </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>ডিসকাউন্ট (যদি থাকে) </h4>
            </div>
            <div class="col-md-8"><input type="text" class="form-control" ></div>
            <div class="col-md-4">
                <h4>এক্সটারনাল লিঙ্ক(ex: PDF) </h4>
            </div>
            <div class="col-md-8" style="max-width: 650px; margin: auto;">
                <div class="form-group">
                    <input type="file" name="product_pdf" id="file" >
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <h4>বর্ণনা </h4>
            </div>
            <div class="col-md-8"><textarea type="text" class="form-control" rows="10" ></textarea></div>

            <div class="col-md-8 col-md-offset-4">
                <button class="btn btn-primary btn-lg" id="upload-button" type="submit" style="margin:2%">Add Product</button>
            </div>
        </form>
    </div>

@endsection
@section('style_script')
    <script>

    </script>
@endsection
