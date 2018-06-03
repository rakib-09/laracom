@extends('adminpanel::layouts.master')

@section('content')
    <div class="col-md-6 product_add">
        <form action="">
            <div class="form-group">
                <label for="">নাম(ইংরেজি)</label>
                <input type="text" class="form-control" name="name_english">
            </div>
            <div class="form-group">
                <label for="">বাংলা নাম</label>
                <input type="text" class="form-control" name="name_bangla">
            </div>
            <div class="form-group">
                <label for="">লেখকের নাম(ইংরেজি)</label>
                <input type="text" class="form-control" name="writer_english">
            </div>
            <div class="form-group">
                <label for="">লেখকের নাম(বাংলা)</label>
                <input type="text"  class="form-control" name="writer_bangla">
            </div>
            <div class="form-group">
                <label for="">পাবলিকেশন্স</label>
                <input type="text"  class="form-control" name="publication">
            </div>
            <div class="form-group">
                <label for="">বইয়ের ছবি</label>
                <input type="file" name="picture" class="form-control">
            </div>
            <div class="form-group">
                <label for="">বইয়ের মূল্য</label>
                <input type="text"  class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">বইয়ের ডিস্কাউন্ট</label>
                <input type="text"  class="form-control" name="discount">
            </div>
            <div class="form-group">
                <label for="">পিডিএফ লিঙ্ক</label>
                <input type="text"  class="form-control" name="ext_link">
            </div>
            <div class="form-group">
                <label for="">বর্ণনা</label>
                <input type="text"  class="form-control" name="description">
            </div>
            <input type="submit" value="Save Changes" class="btn btn-primary">
        </form>
    </div>
@endsection
