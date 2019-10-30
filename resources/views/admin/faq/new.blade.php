@extends('layouts.admin')

@section('title','New FAQ')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Create New FAQ</h4>
                        <div class="row">
                            {{-- @include('partial.alert') --}}
                            <form class="form-horizontal" action="{{ url('admin/faq/new') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-lg-10">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Question
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="question" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Response
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" name="response" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Type
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <select name="type" class="form-control" required>
                                                <option>general</option>
                                                <option>career</option>
                                                <option>investor</option>

                                            </select>
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