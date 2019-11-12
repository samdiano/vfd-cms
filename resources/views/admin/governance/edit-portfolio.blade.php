@extends('layouts.admin')

@section('title','Update Profile')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Update Profile</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal"
                                action="{{ url('admin/governance/portfolios/edit', ['$id' => $info->id]) }}"
                                method="post" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Image
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <label class="">
                                                <input type="file" name="logo" accept="image/*" class="form-control">
                                                <i class="fa fa-photo"></i> Add Photo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Name
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="name" value="{{$info->name}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Role
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="role" value="{{$info->role}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Portfolio
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <select name="portfolio" class="form-control" required>
                                                <option>{{$info->section}}</option><hr>
                                                <option>VFD Microfinance Bank</option>
                                                <option>VFD Bridge</option>
                                                <option>Anchoria Asset Management Limited</option>
                                                <option>Dynasty Real Estate</option>
                                                <option>Everdon Bureau de Change</option>

                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group hidden">
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
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Brief Description
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <textarea name="brief" class="form-control">{{$info->brief}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Description
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <textarea name="description"
                                                class="form-control">{{$info->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Twitter profile
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="url" name="twitter" value="{{$info->twitter}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Instagram profile
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="url" name="instagram" value="{{$info->instagram}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Linkedin profile
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="url" name="linkedin" value="{{$info->linkedin}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Facebook profile
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="url" name="facebook" value="{{$info->profile}}"
                                                class="form-control">
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