@extends('layouts.admin')

@section('title','Portfolio Vacancies')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h2 class="m-t-0 m-b-30">VFD Bridge </h2><br>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/portfolio/bridge') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h2 class=" m-t-0 m-b-30">Everdon Bureau De Change</h2>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/portfolio/everdon') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h2 class="m-t-0 m-b-30">VFD Microfinance Bank</h2>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/portfolio/microfinance') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h2 class="m-t-0 m-b-30">Anchoria Assets Management</h2>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/portfolio/anchoria') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h2 class="m-t-0 m-b-30">Dynasty Real Estate</h2><br>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/portfolio/dynasty') }}">View</a>
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