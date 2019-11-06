@extends('layouts.admin')

@section('title','Investor FAQs')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <a class="btn btn-primary" href="{{ url('admin/faq/new') }}">Add New FAQ</a>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @include('partial.alert')
                                @if(count($faq) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no faqs provided at the moment</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Response</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($faq as $faq)
                                            <tr>
                                                <td>{{ $faq->question }}</td>
                                                <td>{{ $faq->response }}</td>

                                                <td>
                                                    {{-- <a class="btn btn-primary" href="{{ url('booking/annual/view/') }}">View</a>
                                                    --}}
                                                    {{-- <a class="btn btn-info" href="{{ url('booking/annual/view/') }}">Edit</a>
                                                    --}}
                                                    <a data-toggle="modal" data-target="#mod-danger" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="mod-danger" tabindex="-1" role="dialog" style=""
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
                                                                    <a href="{{ url('admin/faq/delete', ['id' => $faq->id])}}"
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