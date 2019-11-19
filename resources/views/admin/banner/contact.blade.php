@extends('layouts.admin')

@section('title','Contact Us Banner Image')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Change Contact Us Banner Image</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/banner') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Cover Image
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <label class="btn btn-primary">
                                                <input type="file" name="image" accept="image/*" class="form-control"
                                                    required>
                                                <i class="fa fa-photo"></i> Add Photo
                                                <input type="hidden" name="type" value="contact" accept="image/*" class="form-control"
                                                    required>
                                            </label>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection