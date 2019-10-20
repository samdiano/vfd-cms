@extends('layouts.admin')

@section('title','New Service')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Create New Service</h4>
                            <div class="row">
{{-- @include('partial.alert') --}}
                                    <form class="form-horizontal" action="{{ url('admin/services/new') }}" method="post" enctype="multipart/form-data" role="form">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    Name
                                                </label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input type="text" name="name" value="{{ Auth::User()->full_name }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10">
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