@extends('layouts.admin')

@section('title','Head of Portfolios')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @include('partial.alert')
                                <div class="m-b-30">
                                    <a class="btn btn-primary" href="{{ url('admin/governance/new') }}">Add Profile</a>
                                </div>
                                @if(count($info) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no Head of portfolios posted at the moment</p> <a
                                            class="btn btn-primary" href="{{ url('admin/governance/new') }}">Click here
                                            to add Profile</a>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Role</th>
                                                <th>Rank</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($info as $info)
                                            <tr>
                                                <td>{{ $info->name }}</td>
                                                <td><img height="200" width="200" src="{{ asset($info->image) }}"
                                                        class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
                                                </td>
                                                <td>{!! $info->role !!}</td>
                                                <td>{!! $info->rank !!}</td>

                                                <td>
                                                    {{-- <a class="btn btn-primary" href="{{ url('booking/annual/view/') }}">View</a>
                                                    --}}
                                                    {{-- <a class="btn btn-info" href="{{ url('booking/annual/view/') }}">Edit</a>
                                                    --}}
                                                    <a class="btn btn-info"
                                                        href="{{ url('admin/governance/portfolios/edit', ['id' => $info->id]) }}">Edit</a>

                                                    <a data-toggle="modal" data-target="#{{$info->id}}" href="#"
                                                        class="btn btn-warning">Change Priority</a>
                                                    <a data-toggle="modal" data-target="#{{$info->id}}del" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="{{$info->id}}del" tabindex="-1" role="dialog" style=""
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
                                                                    <a href="{{ url('admin/governance/portfolios/delete', ['id' => $info->id])}}"
                                                                        class="btn btn-space btn-danger"
                                                                        type="submit">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>

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
                                                                <h3>Update Priority</h3>
                                                                {{-- <p>You are about to delete a request.</p> --}} --}}
                                                                <form class="form-horizontal"
                                                                    action="{{ url('admin/governance/portfolios/rank', ['id' => $info->id]) }}"
                                                                    method="post" enctype="multipart/form-data"
                                                                    role="form">
                                                                    {{ csrf_field() }}
                                                                    <div class="row">

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-3 col-sm-3">
                                                                                Rank
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" name="rank"
                                                                                    placeholder="{{$info->rank}}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="xs-mt-50">
                                                                        <button type="button" data-dismiss="modal"
                                                                            class="btn btn-space btn-default">Cancel</button>
                                                                        <button class="btn btn-space btn-success"
                                                                            type="submit">Change Priority</button>
                                                                    </div>
                                                                </form>
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