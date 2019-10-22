@extends('layouts.admin')

@section('title','Career Page')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class=" m-t-0 m-b-30">Career</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/career') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Vacancies</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/vacancies') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Portfolio Vacancies</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/portfolio-vacancies') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                            <div class="card-box text-center">
                                <h2 class="m-t-0 m-b-30">Youtube Video</h2>
                                <div class="widget-chart-3">
                                    <div class="widget-detail-1 ">
                                        <h4 class="p-t-10 m-b-0"><a
                                                    href="{{ url('admin/career/video') }}">View</a>
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