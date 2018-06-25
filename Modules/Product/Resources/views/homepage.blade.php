@extends('adminpanel::layouts.master')
@section('content')
    <div class="col-md-12">
        <form id="uploadform" action="/product/homepage" method="post" enctype="multipart/form-data" >
            @csrf
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
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Promote Image 1 </h4>
                </div>
                <div class="col-md-8">
                    <input type="file" class="form-control" name ="promote1" accept="image/*" required>
                    <input type="text" class="form-control" name="write1" placeholder="write up for1" required>
                    <input type="text" class="form-control" name="link1" placeholder="link for 1" required>

                </div>
                </div>
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Promote Image 2 </h4>
                </div>
                <div class="col-md-8"><input type="file" class="form-control" name ="promote2" accept="image/*" required>
                    <input type="text" class="form-control" name="write2" placeholder="write up for 2" required>
                    <input type="text" class="form-control" name="link2" placeholder="Link for 2" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <h4>Promote Image 3 </h4>
                </div>
                <div class="col-md-8">
                    <input type="file" class="form-control" name ="promote3" accept="image/*" required>
                    <input type="text" class="form-control" name="write3"  placeholder="write up for3" required>
                    <input type="text" class="form-control" name="link3"  placeholder="link for 3" required>
                </div>
            </div>
        <table class="table display" id="productTable" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>weekly featured</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productList as $product)
                <tr>
                    <td><img src="<?php echo asset("storage/images/products/$product->image")?>" alt="" height="70" width="70"></td>
                    <td>{{$product->bangla_name}}</td>
                    <td><input type="checkbox" name="weekly[]" class="form-control" value="{{$product->id}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="col-md-10" style="margin-left: 80%; margin-top: 5%; margin-bottom: 10%">
                <button type="submit" class="btn btn-success">SUBMIT</button>
            </div>
        </form>
    </div>

@endsection
@section('style_script')
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script>
        var table = $('#productTable').DataTable();
    </script>
@endsection