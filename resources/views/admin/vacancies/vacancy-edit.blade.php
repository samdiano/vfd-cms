@extends('layouts.admin')

@section('title','New Vacancy')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Edit Vacancy</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/vacancies/edit',['$id' =>$info->id]) }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-md-10">
                                    {{-- <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Profile Picture
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <label class="btn btn-primary">
                                                        <input type="file" name="profilepicture" accept="image/*" class="form-control" required>
                                                        <i class="fa fa-photo"></i> Add Photo
                                                    </label>
                                                </div>
                                            </div> --}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Role
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="role" value="{{ $info->role}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Description
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="description" placeholder="Job Description" value="{{ $info->description}}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Level
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="level" value="{{ $info->level}}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3">
                                                Department
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" name="department" value="{{ $info->department}}"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Deadline
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="date" name="deadline"
                                                class="form-control" >
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