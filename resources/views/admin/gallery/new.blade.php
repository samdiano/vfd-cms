@extends('layouts.admin')

@section('title','New Image')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Create New Image</h4>
                            <div class="row">
{{-- @include('partial.alert') --}}
                                    <form class="form-horizontal" action="{{ url('admin/gallery/new') }}" method="post" enctype="multipart/form-data" role="form">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Image
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <label class="btn btn-primary">
                                                        <input type="file" name="cover" accept="image/*" class="form-control" required>
                                                        <i class="fa fa-photo"></i> Add Photo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Title
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Description
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <textarea name="content" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Year
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="text" name="year" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <button class="btn btn-primary pull-right">Submit</button>
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