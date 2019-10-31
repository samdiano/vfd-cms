@extends('layouts.admin')

@section('title','About us ')

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
                        <h4 class="header-title m-t-0 m-b-30">History</h4>
                        <div class="row">
                            {{-- @include('partial.alert') --}}
                            <form class="form-horizontal" action="{{ url('admin/history') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control" name="history">{{$company->history}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Quote
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input class="form-control" name="history_quote"
                                            value="{{$company->history_quote}}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control"
                                            name="history_text">{{$company->history_text}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Side Quote
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input class="form-control" name="history_quote_side"
                                            value="{{$company->history_quote_side}}" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-11">
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