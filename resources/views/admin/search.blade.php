{{-- <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div> --}}

@extends('layouts.admin')

@section('title','Search Result')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    @if(!isset($details))
                                        <br><br>
                                        <div class="alert alert-info text-center">
                                            <p>No Details found. Try to search again !</p>
                                        </div>
                                    @else
                                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                            
                                        <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                            <tr>
                                                    <th></th>
                                                <th>Driver Serial Number</th>
                                                <th>Registration Date</th>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($details as $driver)
                                                <tr>
                                                        <td>
                                                            @if($driver->is_verified == 1)
                                                            <i style="font-family:comic sans ms" class = "text-success">Verified</i>
                                                        @endif
                                                        @if($driver->has_card  == 1)
                                                            <i style="font-family:comic sans ms" class = "text-success">Card Collected</i>
                                                        @endif
                                                        @if($driver->is_blacklisted == 1)
                                                        <i style="font-family:comic sans ms" class = "text-danger">Blacklisted</i>
                                                        @endif
    
                                                            </td>
                                                            <td>{{ $driver->serial_number }}</td>
                                                            <td>{{ $driver->created_at }}</td>
                                                            <td>{{ $driver->firstname.' '. $driver->lastname }}</td>
                                                            <td>{{ $driver->email }}</td>
                                                            <td>{{ $driver->location }}</td>
                                                    <td>
                                                        <a href="{{ url('short-time/edit',['id' => $driver->id]) }}" class="btn btn-info">Edit</a>
                                                        <a href="{{ url('full-time/profile',['id' => $driver->id]) }}" class="btn btn-primary">View Profile</a>
                                                        <a href="{{ url('full-time/pdf',['id' => $driver->id]) }}" class="btn btn-primary">Download Profile</a>
                                                        <a href="{{ url('short-time/guarantor',['id' => $driver->id]) }}" class="btn btn-primary">Upload Guarantor's Form</a>
                                                        <a data-toggle="modal" data-target="#veri-danger{{$driver->id}}" href="#" class="btn btn-primary">Verify</a>
                                                        <a data-toggle="modal" data-target="#black-danger{{$driver->id}}" href="#" class="btn btn-warning">Blacklist</a>
                                                        <a data-toggle="modal" data-target="#card{{$driver->id}}" href="#" class="btn btn-primary">Activate Card</a>
                                                        <a data-toggle="modal" data-target="#mod-danger{{$driver->id}}" href="#" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <div id="mod-danger{{$driver->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                    <h3>Warning!</h3>
                                                                    <p>You are about to delete a driver.</p>
                                                                    <div class="xs-mt-50">
                                                                        <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                        <a href="{{ url('short-time/delete',['id' => $driver->id]) }}" class="btn btn-space btn-danger">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="black-danger{{$driver->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="text-center">
                                                                        <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                        <h3>Warning!</h3>
                                                                        <p>You are about to blacklist a driver.</p>
                                                                        <div class="xs-mt-50">
                                                                            <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                            <a href="{{ url('short-time/blacklist',['id' => $driver->id]) }}" class="btn btn-space btn-danger">Blacklist</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="veri-danger{{$driver->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                            <h3>Warning!</h3>
                                                                            <p>You are about to verify a driver.</p>
                                                                            <div class="xs-mt-50">
                                                                                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                                <a href="{{ url('short-time/verify',['id' => $driver->id]) }}" class="btn btn-space btn-danger">Verify</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="card{{$driver->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="text-center">
                                                                            <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                            <h3>Warning!</h3>
                                                                            <p>You are about to activate card for this driver.</p>
                                                                            <div class="xs-mt-50">
                                                                                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                                <a href="{{ url('short-time/card',['id' => $driver->id]) }}" class="btn btn-space btn-primary">Activate</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection