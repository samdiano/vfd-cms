@extends('layouts.admin')

@section('title','New Profile')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Create New Profile</h4>
                            <div class="row">
{{-- @include('partial.alert') --}}
                                    <form class="form-horizontal" action="{{ url('admin/governance/new') }}" method="post" enctype="multipart/form-data" role="form">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Image
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
                                                    Role
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="text" name="role" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Section
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <select name="section" class="form-control" required>
                                                        <option>directors</option>
                                                        <option>management</option>
                                                        <option>portfolio</option>
                                                        
                                                    </select>   
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Brief Description
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <textarea name="brief" class="form-control"></textarea>
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
                                                    Twitter profile
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="url" name="twitter" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Instagram profile
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="url" name="instagram" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Linkedin profile
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="url" name="linkedin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Facebook profile 
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="url" name="facebook" class="form-control">
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