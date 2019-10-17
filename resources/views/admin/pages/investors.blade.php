@extends('layouts.admin')

@section('title','Investors Page')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class=" m-t-0 m-b-30">Financial Info</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/financial-information') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Conference Calls</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/conference-calls') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">Press Release</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/press-release') }}">View</a>
                                    </h4>
                                    {{-- <p class="text-muted">Registered</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box text-center">
                            <h2 class="m-t-0 m-b-30">FAQs</h2>
                            <div class="widget-chart-3">
                                <div class="widget-detail-1 ">
                                    <h4 class="p-t-10 m-b-0"><a
                                                href="{{ url('admin/faq') }}">View</a>
                                    </h4>
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