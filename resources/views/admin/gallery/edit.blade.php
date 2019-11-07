@extends('layouts.admin')

@section('title','Update Image')

@section('content')
<div class="content-page">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Create New Image</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/gallery/edit', ['$id' => $info->id]) }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="col-lg-10">
                                    {{-- <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Image
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <label class="btn btn-primary">
                                                <input type="file" name="cover[]" accept="image/*" class="form-control"
                                                    required>
                                                <i class="fa fa-photo"></i> Add Photo
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-offset-4 col-md-6 m-b-30">

                                        <div
                                            class="input-group control-group increment">
                                            <input type="file" name="cover[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-success" type="button"><i
                                                        class="glyphicon glyphicon-plus"></i>Add</button>
                                            </div>
                                        </div>
                                        <div class="clone hide">
                                            <div class="control-group input-group" style="margin-top:10px">
                                                <input type="file" name="cover[]" class="form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger" type="button"><i
                                                            class="glyphicon glyphicon-remove"></i> Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                            Date
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="date" name="year" class="form-control">
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

<script type="text/javascript">
    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group ").remove();
      });

    });

</script>
@endsection