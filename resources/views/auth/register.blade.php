@extends('layout.dashboard')
@section('title')
    Register Page
@endsection
@section('content')
<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="{!!asset('/assets/img/logo.png')!!}" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Welcome guest, please register or <a href="{!!URL::route('login')!!}">sign in</a></center></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{URL::route('register')}}">
                        {!! csrf_field() !!}
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control" placeholder="Username" name="name" type="text" value="{{ old('name') }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" type="email">
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <center>contact admin for user account</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@endsection