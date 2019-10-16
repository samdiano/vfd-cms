@extends('layouts.admin')

@section('title','Dashboard')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class=" m-t-0 m-b-30">About us</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/about') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Career</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('corporate-users/list') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Investors</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('short-time/list') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Media</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('full-time/list') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Portfolio</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('uber/list') }}">View</a></h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Profile</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('vary/list') }}">View</a></h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection