@extends('Template.master')
@section('content')
    @include('profile::layouts.master')
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-6 settings_details info">
                <form action="">

                    <div class="form-group">
                        <label for="">নাম</label>
                        <input type="text" class="form-control" value="{{auth()->user->name}}">
                        <input type="hidden" value="{{auth()->user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="">ই-মেইল</label>
                        <input type="text" class="form-control" value="{{auth()->user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">ফোন নাম্বার</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">জন্ম তারিখ</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ঠিকানা</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">শহর</label>
                        <input type="text"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">দেশ</label>
                        <input type="text"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">পোস্টাল কোড</label>
                        <input type="text"  class="form-control">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
