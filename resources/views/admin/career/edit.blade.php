@extends('layouts.admin')

@section('title','Career')

@section('content')
<div class="content-page">
    <script>
        // tinymce.activeEditor.dom.addClass(tinymce.activeEditor.dom.select('p'), 'myclass');
    </script>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Career</h4>
                        <div class="row">
                            {{-- @include('partial.alert') --}}
                            <form class="form-horizontal" action="{{ url('admin/career') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    {{-- <label class="control-label col-md-3 col-sm-3">
                                                    First name
                                                </label> --}}
                                    <div class="col-md-offset-2 col-md-9 col-sm-9">
                                        <textarea class="form-control"
                                            name="career">{{$company->career ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Quote
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input class="form-control" name="career_quote"
                                            value="{{$company->career_quote}}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control"
                                            name="career_text">{{$company->career_text}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-9">
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
