@extends('layouts.admin')

@section('title','New Subsidiary')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Create New Subsidiary</h4>
                            <div class="row">
{{-- @include('partial.alert') --}}
                                    <form class="form-horizontal" action="{{ url('admin/subsidiaries/new') }}" method="post" enctype="multipart/form-data" role="form">
                                        {{ csrf_field() }}
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Logo
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <label class="btn btn-primary">
                                                        <input type="file" name="logo" accept="image/*" class="form-control" required>
                                                        <i class="fa fa-photo"></i> Add Photo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Name
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Description
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <textarea name="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Hyperlink
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="url" name="link" class="form-control">
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