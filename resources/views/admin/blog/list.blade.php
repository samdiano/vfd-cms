@extends('layouts.admin')

@section('title','Blog')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                             <a class="btn btn-primary" href="{{ url('admin/blog/new') }}">Add Article</a>
                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    {{-- @include('partial.alert') --}}
                                    @if(count($info) < 1)
                                        <br><br>
                                        <div class="alert alert-info text-center">
                                            <p>There are no articles posted at the moment</p>
                                        </div>
                                    @else
                                        <br><br>
                                        <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($info as $info)
                                                <tr>
                                                    <td>{{ $info->title }}</td>
                                                    <td><img height="300" width="300" src="{{ asset($info->image_path) }}" class="img-fluid position-absolute global-image-subtract d-none d-md-block" /></td>
                                                    <td>{!! $info->content !!}</td>
                                                   
                                                    <td>
                                                        {{-- <a class="btn btn-primary" href="{{ url('booking/annual/view/') }}">View</a> --}}
                                                        {{-- <a class="btn btn-info" href="{{ url('booking/annual/view/') }}">Edit</a> --}}
                                                        <a data-toggle="modal" data-target="#mod-danger" href="#" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <div id="mod-danger" tabindex="-1" role="dialog" style="" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                    <h3>Warning!</h3>
                                                                    <p>You are about to delete a request.</p>
                                                                    <div class="xs-mt-50">
                                                                        <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                        <a href="{{ url('booking/annual/')}}" class="btn btn-space btn-danger" type="submit">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                                {{-- {{ $bookings->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection