@extends('adminpanel::layouts.master')
@section('content')
<div class="col-md-10">
<table class="table display" id="productTable">
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productList as $product)
    <tr>
        <td><img src="<?php echo asset("storage/images/products/$product->image")?>" alt="" height="70" width="70"></td>
        <td>{{$product->bangla_name}}</td>
        <td>{{$product->category_id}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->discount}}</td>
        <td><a href="#" class="product_details" id="{{$product->id}}">See Details</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
    <!-- Modal -->
    <div class="modal fade" id="invoice-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Invoice Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="./update" method="post">
                    @csrf
                <div class="modal-body">
                    <table class="table table-order popupTable">
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style_script')
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(".ranking").addClass('active').siblings('.list-group-item').removeClass('active');

            var table = $('#productTable').DataTable();

            $(".product_details").on('click', function () {

                $(".popupTable tbody").html("");
                var id = $(this).attr('id');
                var table = "";

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/product/show',
                    type:'POST',
                    data:{id: id},

                    success: function (data) {
                            table +="<tr>" +
                                "<td> <label for=''>Product Name</label> </td><td><input type='hidden' name='product_id' value='"+ id + "'><input type='text' name='name' class='form-control' value='" + data.name +"' ></td></tr>" +
                                "<tr><td> <label for=''>Product Name Bangla</label> </td><td><input type='text' name='bangla_name' class='form-control' value='" + data.bangla_name +"' ></td></tr>" +
                                "<tr><td> <label for=''>Category ID</label> </td><td><input type='text' name='category_id' class='form-control' value='" + data.category_id +"' ></td></tr>" +
                                "<tr><td> <label for=''>Writer</label> </td><td><input type='text' name='writer' class='form-control' value='" + data.writer +"' ></td></tr>" +
                                "<tr><td> <label for=''>Writer bangla</label> </td><td><input type='text' name='writer_bangla' class='form-control' value='" + data.writer_bangla +"' ></td></tr>" +
                                "<tr><td> <label for=''>Publication</label> </td><td><input type='text' name='publication' class='form-control' value='" + data.publication +"' ></td></tr>" +
                                "<tr><td> <label for=''>Price</label> </td><td><input type='text' name='price' class='form-control' value='" + data.price +"' ></td></tr>" +
                                "<tr><td> <label for=''>Discount</label> </td><td><input type='text' name='discount' class='form-control' value='" + data.discount +"' ></td></tr>" +
                                "<tr><td> <label for=''>Description</label> </td><td><textarea class='form-control' name='description'>" + data.description +"</textarea></td></tr>";

                        $(".popupTable tbody").append(table);
                        $('#invoice-details').modal('show');
                    }
                });
            });

        })
    </script>
@endsection
