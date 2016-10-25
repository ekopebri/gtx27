<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap.min.css')!!}">
    <link href="{!!asset('assets/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/plugins/pace/pace-theme-big-counter.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/css/style.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/css/main-style.css')!!}" rel="stylesheet" />
    <link href="{!!asset('assets/plugins/social-buttons/social-buttons.css')!!}" rel="stylesheet" />
    @yield('style')
</head>
<body>
@if(Auth::check())
	<!-- wrapper -->
	<div id="wrapper">
	<!-- navbar top -->
	@include('include.admin.header')
	<!-- end navbar top -->
	<!-- navbar side -->
	@include('include.admin.sidebar')
	<!-- end navbar side -->
	@yield('content')
	</div>
@else
    @yield('content')
@endif
     <!-- Core Scripts - Include with every page -->
    <script src="{!!asset('assets/plugins/jquery-1.10.2.js')!!}"></script>
    <script src="{!!asset('assets/plugins/bootstrap/bootstrap.min.js')!!}"></script>
    <script src="{!!asset('assets/plugins/metisMenu/jquery.metisMenu.js')!!}"></script>
    <script src="{!!asset('assets/plugins/pace/pace.js')!!}"></script>
    <script src="{!!asset('assets/scripts/siminta.js')!!}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
            }
        })
    </script>
    <!-- Page-Level Plugin Scripts-->
    @yield('script')
</body>

</html>
