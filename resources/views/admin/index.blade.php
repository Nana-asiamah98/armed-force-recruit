@extends('admin.admin_master')
@section('admin')
       
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Main</a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

        <div class="row">
            <!-- page statustic card start -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-yellow">$30200</h4>
                                <h6 class="text-muted m-b-0">All Earnings</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-bar-chart-2 f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-yellow">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">% change</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-green">290+</h4>
                                <h6 class="text-muted m-b-0">Page Views</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-file-text f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-green">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">% change</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-red">145</h4>
                                <h6 class="text-muted m-b-0">Task</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-calendar f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-red">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">% change</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">500</h4>
                                <h6 class="text-muted m-b-0">Downloads</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-thumbs-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">% change</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->


            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Account summary</h5>
                    </div>
                    <div class="card-body">
                        <div id="summary-chart"></div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
            <!-- Tasks start -->
            <div class="col-xl-5 col-md-12">
                <div class="card task-card">
                    <div class="card-header">
                        <h5>Notice</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="feather icon-check f-w-600 task-icon bg-c-green"></i>
                                <p class="m-b-5">8:50</p>
                                <h6 class="text-muted">Your first semester Exam will held on <span class="text-c-blue">19-04-2018</span>.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-c-blue"></i>
                                <p class="m-b-5">Sat, 5 Mar</p>
                                <h6 class="text-muted">In your school campus on <span class="text-c-blue">1-03-2018</span> will held a program of <span class="text-c-blue">annual sports day</span>.You are all invited.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-c-red"></i>
                                <p class="m-b-5">Sun, 17 Feb</p>
                                <h6 class="text-muted">Your second semester exam will held on 30-08-2018.Please be prepare for your exam</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-c-yellow"></i>
                                <p class="m-b-5">Sat, 18 Mar</p>
                                <h6 class="text-muted">On <span class="text-c-blue">20-11-2018</span> will held a programming contest in school campus.Registration start from today. </h6>
                            </li>
                            <li class="pb-2 mb-0">
                                <i class="task-icon bg-c-green"></i>
                                <p class="m-b-5">Sat, 22 Mar</p>
                                <h6 class="text-muted">Prize giving ceremony will held on <span class="text-c-blue">03-01-2019</span>.Best Student List published In your Website.</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body bg-c-blue">
                        <div id="absent-chart"></div>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted m-b-30 m-t-15">Students Today's Attendance</h6>
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <h6 class="text-muted m-b-10">Total present student</h6>
                                <h3 class="">175</h3>
                            </div>
                            <div class="col-6">
                                <h6 class="text-muted m-b-10">Total absent student</h6>
                                <h3 class="">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tasks end -->
        </div>
        <!-- [ Main Content ] end -->
    
   @endsection 