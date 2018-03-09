@extends('adminpanel::layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="col-md-4">
            <h4>Upload Image</h4>
        </div>
        <div class="col-md-8" style="max-width: 650px; margin: auto;">
            <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
                <div id="image-preview-div" style="display: none">
                    <label for="exampleInputFile">Selected image:</label>
                    <br>
                    <img id="preview-img" src="noimage">
                </div>
                <div class="form-group">
                    <input type="file" name="file" id="file" required>
                </div>
                <button class="btn btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
            </form>
            <br>
            <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                Uploading image...
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </div>
            <div id="message"></div>
        </div>
        <div class="col-md-4">
            <h4>Product Name(English) </h4>
        </div>
        <div class="col-md-8"><input type="text" class="form-control" ></div>
        <div class="col-md-4">
            <h4>Product Name(Bangla) </h4>
        </div>
        <div class="col-md-8"><input type="text" class="form-control" ></div>
        <div class="col-md-4">
            <h4>Writer name(English) </h4>
        </div>
        <div class="col-md-8"><input type="text" class="form-control" ></div>
        <div class="col-md-4">
            <h4>Writer Name(Bangla) </h4>
        </div>
        <div class="col-md-8"><input type="text" class="form-control" ></div>
        <div class="col-md-4">
            <h4>Product Name(English) </h4>
        </div>
        <div class="col-md-8"><input type="text" class="form-control" ></div>

    </div>

@endsection
@section('style_script')
    <script>
        $(document).ready(function() {
            /*jslint browser: true, white: true, eqeq: true, plusplus: true, sloppy: true, vars: true*/
            /*global $, console, alert, FormData, FileReader*/


            function noPreview() {
                $('#image-preview-div').css("display", "none");
                $('#preview-img').attr('src', 'noimage');
                $('upload-button').attr('disabled', '');
            }

            function selectImage(e) {
                $('#file').css("color", "green");
                $('#image-preview-div').css("display", "block");
                $('#preview-img').attr('src', e.target.result);
                $('#preview-img').css('max-width', '550px');
            }

            $(document).ready(function (e) {

                var maxsize = 500 * 1024; // 500 KB

                $('#max-size').html((maxsize/1024).toFixed(2));

                $('#upload-image-form').on('submit', function(e) {

                    e.preventDefault();

                    $('#message').empty();
                    $('#loading').show();

                    $.ajax({
                        url: "upload-image.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data)
                        {
                            $('#loading').hide();
                            $('#message').html(data);
                        }
                    });

                });

                $('#file').change(function() {

                    $('#message').empty();

                    var file = this.files[0];
                    var match = ["image/jpeg", "image/png", "image/jpg"];

                    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
                    {
                        noPreview();

                        $('#message').html('<div class="alert alert-warning" role="alert">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>');

                        return false;
                    }

                    if ( file.size > maxsize )
                    {
                        noPreview();

                        $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is ' + (file.size/1024).toFixed(2) + ' KB, maximum size allowed is ' + (maxsize/1024).toFixed(2) + ' KB</div>');

                        return false;
                    }

                    $('#upload-button').removeAttr("disabled");

                    var reader = new FileReader();
                    reader.onload = selectImage;
                    reader.readAsDataURL(this.files[0]);

                });

            });
        });
    </script>
    <style>
        .container-main {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;

        }
        .drop {
            border: 2px dotted #9D794A;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            width: 100%;
            height: 120px;
            color: #bdc3c7;
            font-size: 200%;



        }
    </style>
@endsection
