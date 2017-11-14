@extends('layouts.layout')
@section('title', 'DashBoard')

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Dashboard
                <small>Statistics</small>
            </h3>
            <!-- END PAGE TITLE-->

            <hr>


            <!-- START -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="details">
                        <div class="number"></div>
                        <div class="desc"> TOTAL  </div>
                    </div>
                </div>
            </div>
            <!-- END -->



            <!-- START -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat yellow">
                    <div class="visual">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="details">
                        <div class="number"></div>
                        <div class="desc"> TOTAL </div>
                    </div>
                </div>
            </div>
            <!-- END -->

            <!-- START -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="details">
                        <div class="number"></div>
                        <div class="desc"> TOTAL . </div>
                    </div>
                </div>
            </div>
            <!-- END -->

            <!-- START -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat purple">
                    <div class="visual">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="details">
                        <div class="number">{{ $user }}</div>
                        <div class="desc">TOTAL USER </div>
                    </div>
                </div>
            </div>
            <!-- END -->

        </div>
        <!-- END CONTENT BODY -->
    </div>

@endsection