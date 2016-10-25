<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap.min.css')!!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!!asset('assets/css/android.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/logo-nav.css')!!}">
    <link href="{!!asset('assets/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/plugins/pace/pace-theme-big-counter.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/css/style.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/css/main-style.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/plugins/social-buttons/social-buttons.css')!!}" rel="stylesheet" />
    <style type="text/css">
    .navbar-custom {
        background-color:#EB1B24;
        color:#ffffff;
        border-radius:0;
    }

    .navbar-custom .navbar-nav > li > a {
        color:#fff;
    }
    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
        color: #ffffff;
        background-color:transparent;
    }
    .navbar-custom .navbar-brand {
        color:#eeeeee;
    }
    #dropdown {
        background-color: #EB1B24;
    }
    #font-dropdown{
        color: #fff;
    }

    #side-menu a {
        color: #fff;
        border-bottom: 1px solid #FFF !important;
        height: 55px;
    }
    

    }
    </style>
    @yield('style')
</head>
<body>

@include('include.utama.header')

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- SideBAR-->
        @include('include.utama.sidebar')

        <!-- content -->
        @yield('content')
    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{!!asset('assets/plugins/jquery-1.10.2.js')!!}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{!!asset('assets/js/bootstrap.min.js')!!}"></script>
    <script src="{!!asset('assets/plugins/metisMenu/jquery.metisMenu.js')!!}"></script>
    <script src="{!!asset('assets/scripts/siminta.js')!!}"></script>


@yield('script')

</body>

</html>
