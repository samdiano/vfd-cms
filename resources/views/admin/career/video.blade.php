@extends('layouts.admin')

@section('title','VFD Group Career Video')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Upload Video link</h4>

                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/career/video') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3">
                                            Youtube Link
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input class="form-control" name="link"
                                                value="https://youtube.com/watch?v={{$company->youtube_link}}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                        @if($company->youtube_link)
                        <div class="col-md-offset-1 col-md-6">
                            <div class="video-container">
                                <iframe width="915" height="515" src="https://youtube.com/embed/{{$company->youtube_link}}"" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection