@extends('layouts.admin')

@section('title','Values')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <a class="btn btn-primary" href="{{ url('admin/values/new/') }}">Add New Value</a>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @include('partial.alert')
                                @if(count($services) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no values at the moment</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Values</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>{{ $service->value }}</td>
                                                <td>{{ $service->description }}</td>

                                                <td>
                                                    {{-- <a class="btn btn-info" href="{{ url('booking/annual/view/') }}">Edit</a>
                                                    --}}
                                                    <a data-toggle="modal" data-target="#{{$service->id}}edit" href="#"
                                                        class="btn btn-info">Edit</a>
                                                    <a data-toggle="modal" data-target="#{{$service->id}}" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="{{$service->id}}" tabindex="-1" role="dialog" style=""
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
                                                                <p>You are about to delete an Item.</p>
                                                                <div class="xs-mt-50">
                                                                    <button type="button" data-dismiss="modal"
                                                                        class="btn btn-space btn-default">Cancel</button>
                                                                    <a href="{{ url('admin/values/delete', ['id' => $service->id])}}"
                                                                        class="btn btn-space btn-danger"
                                                                        type="submit">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="{{$service->id}}edit" tabindex="-1" role="dialog" style=""
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
                                                                <div class="container">
                                                                    <h4>Update Value</h4>
                                                                    <form class="form-horizontal"
                                                                        action="{{ url('admin/values/edit', ['id' => $service->id]) }}"
                                                                        method="post" enctype="multipart/form-data"
                                                                        role="form">
                                                                        {{ csrf_field() }}
                                                                        <div class="col-md-12">
                                                                            <div class="form-group row">
                                                                                <label
                                                                                    class="control-label col-md-3 col-sm-3">
                                                                                    Name
                                                                                </label>
                                                                                <div class="col-md-9 col-sm-9">
                                                                                    <input type="text" name="value"
                                                                                        value="{{ $service->value }}"
                                                                                        class="form-control">
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label
                                                                                    class="control-label col-md-3 col-sm-3">
                                                                                    Description
                                                                                </label>
                                                                                <div class="col-md-9 col-sm-9">
                                                                                    <input type="text"
                                                                                        name="description"
                                                                                        value="{{ $service->description }}"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="container">
                                                                            
                                                                            <div class="xs-mt-50 pull-right">
                                                                                <br>
                                                                                
                                                                                <button class="btn btn-space btn-info"
                                                                                type="submit">Edit</button>
                                                                            </form>
                                                                    </div>
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