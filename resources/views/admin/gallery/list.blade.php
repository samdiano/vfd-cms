@extends('layouts.admin')

@section('title','Gallery')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <a class="btn btn-primary" href="{{ url('admin/gallery/new') }}">Add Image</a>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @include('partial.alert')
                                @if(count($info) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no images posted at the moment</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($info as $info)
                                            <tr>
                                                <td>{{ $info->title }}</td>
                                                <td style="display:flex">
                                                    @foreach(json_decode($info->image_path) as $key=> $path)
                                                    <div style="position:relative">
                                                        <img height="120" width="120" src="{{ asset($path) }}"
                                                            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
                                                        <div style="position:absolute; bottom:10px; left:5%;">
                                                            <div class="row">
                                                                @if($key > 0)
                                                                <div class="col-md-6">

                                                                    <form
                                                                        action="{{ url('admin/gallery/position', ['id' => $info->id, 'key' => $key]) }}"
                                                                        method="post">
                                                                        {{ csrf_field() }}
                                                                        <button class="btn btn-warning" type="submit"
                                                                            style="font-size:10px; padding: 6px !important;">Make
                                                                            Primary</button>
                                                                    </form>
                                                                </div>
                                                                @endif
                                                                <div class="col-md-6">

                                                                    <form
                                                                        action="{{ url('admin/gallery/delete/single', ['id' => $info->id, 'key' => $key]) }}"
                                                                        method="post">
                                                                        {{ csrf_field() }}
                                                                        <button class="btn btn-danger" type="submit"
                                                                            style="font-size:10px; padding: 6px 8px !important; margin-left: 25%"><i
                                                                                class="zmdi zmdi-delete"></i></button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{-- <a class="btn btn-primary" href="{{ url('booking/annual/view/') }}">View</a>
                                                    --}}
                                                    {{-- <a class="btn btn-info" href="{{ url('booking/annual/view/') }}">Edit</a>
                                                    --}}
                                                    <a class="btn btn-info"
                                                        href="{{ url('admin/gallery/edit', ['id' => $info->id]) }}">Edit</a>

                                                    <a data-toggle="modal" data-target="#{{$info->id}}" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="{{$info->id}}" tabindex="-1" role="dialog" style=""
                                                class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal"
                                                                aria-hidden="true" class="close"><span
                                                                    class="mdi mdi-close"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <div class="text-danger"><span
                                                                        class="modal-main-icon mdi mdi-close-circle-o"></span>
                                                                </div>
                                                                <h3>Warning!</h3>
                                                                <p>You are about to delete a request.</p>
                                                                <div class="xs-mt-50">
                                                                    <button type="button" data-dismiss="modal"
                                                                        class="btn btn-space btn-default">Cancel</button>
                                                                    <a href="{{ url('admin/gallery/delete', ['id' => $info->id])}}"
                                                                        class="btn btn-space btn-danger"
                                                                        type="submit">Delete</a>
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