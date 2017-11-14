@extends('layouts.layout')
@section('title', 'User List')
@section('style')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">  Register User List <small></small></h3>
            <hr>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-md-12">


                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <!--i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase">AAA</span-->
                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>

                                <tr>
                                    <th> ID# </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> A/S </th>
                                    <th> Organisation </th>
                                    <th> Address </th>
                                    <th> Action </th>
                                </tr>

                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($studentlist as $list)
                                    @php
                                        $i++;
                                    @endphp

                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$list->name}}</td>
                                        <td>{{$list->username}}</td>
                                        <td>{{$list->email}}</td>
                                        <td>{{$list->mobile}}</td>
                      
                                        
                                        <td>
                                            @if( $list->invite == 0)

                                                <a href="{{ route('invitation_view', $list->id ) }}" class="btn green btn-xs"><i class="fa fa-paper-plane"></i> INVITE NOW</a>
                                            @else
                                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-check"></i> INVITED</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                </div>
            </div><!-- ROW-->


        </div>
        <!-- END CONTENT BODY -->

    @endsection
    @section('script')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

@endsection