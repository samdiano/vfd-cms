@extends('layouts.admin')

@section('title','Culture')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class=" m-t-0 m-b-30">Our Culture</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/culture/edit') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Mission</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/mission') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Vision</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/vision') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Our Values</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/values') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Our Values</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/values') }}">View</a></h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
@endsection