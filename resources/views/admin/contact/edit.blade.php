@extends('layouts.admin')

@section('title','Contact')

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
                        <h4 class="header-title m-t-0 m-b-30">Contact</h4>
                        <div class="row">
                            {{-- @include('partial.alert') --}}
                            <form class="form-horizontal" action="{{ url('admin/contact') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Email 1
                                    </label>
                                    <div class="col-md-8 col-sm-9">
                                        <input type="text" class="form-control" style="height:100px" name="email1"
                                            value="{{$company->email1}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Email 2
                                    </label>
                                    <div class="col-md-8 col-sm-9">
                                        <input type="text" class="form-control" style="height:100px" name="email2"
                                            value="{{$company->email2}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Address
                                    </label>
                                    <div class="col-md-8 col-sm-9">
                                        <input type="text" class="form-control" style="height:100px" name="address"
                                            value="{{$company->address}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Phone
                                    </label>
                                    <div class="col-md-8 col-sm-9">
                                        <input type="text" class="form-control" style="height:100px" name="phone"
                                            value="{{$company->phone}}" />
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