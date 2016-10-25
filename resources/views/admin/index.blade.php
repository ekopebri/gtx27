@extends('layout.dashboard')
@section('title')
    Home / Admin
@endsection
@section('style')
    <link href="{!!asset('assets/plugins/morris/morris-0.4.3.min.css')!!}" rel="stylesheet" />
@endsection
@section('content')
    <!--  wrapper -->
    <div id="wrapper">
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    Welcome <strong>{{ Auth::user()->name }}</strong>
                </div>
                <!--end  Welcome -->
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
@section('script')
    <script src="{!!asset('assets/plugins/morris/raphael-2.1.0.min.js')!!}"></script>
    <script src="{!!asset('assets/plugins/morris/morris.js')!!}"></script>
    <script src="{!!asset('assets/scripts/dashboard-demo.js')!!}"></script>
@endsection