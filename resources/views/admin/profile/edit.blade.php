@extends('layouts.admin')

@section('title','VFD Group Profile')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Upload VFD Profile</h4>
                            @if($company->profile)
                            <div>
                                <button class="btn btn-lg btn-info"><a style="color:white" target="_blank" href={{ url($company->profile)}}>View File</a></button>
                            </div>
                            @endif
                            <div class="row">
{{-- @include('partial.alert') --}}
                                    <form class="form-horizontal" action="{{ url('admin/profile') }}" method="post" enctype="multipart/form-data" role="form">
                                        {{ csrf_field() }}
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3">
                                                    VFD Group Profile
                                                </label>
                                                <div class="col-md-4 col-sm-9">
                                                    <label class="btn btn-primary">
                                                        <input type="file" name="profile" accept=".doc, .docx, .pdf, .ppt" class="form-control" required>
                                                        <i class="fa fa-photo"></i> Add file
                                                    </label>
                                                </div>
                                                {{-- <div class="form-group"> --}}
                                                    <div class="col-md-3">
                                                        <button class="btn btn-lg btn-primary">Submit</button>
                                                    </div>
                                                    
                                                {{-- </div> --}}
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
