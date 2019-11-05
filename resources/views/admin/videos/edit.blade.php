@extends('layouts.admin')

@section('title','Update Video')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Updatevideo</h4>
                        <div class="row">
                            {{-- @include('partial.alert') --}}
                            <form class="form-horizontal" action="{{ url('admin/videos/edit', ['$id' => $info->id]) }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-md-10">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Title
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                        <input type="text" name="title" value="{{$info->title}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3">
                                                Video Link
                                            </label>
                                            <div class="col-md-9 col-sm-9">
                                            <input type="url" name="link" value="{{$info->link}}" class="form-control">
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