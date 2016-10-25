@extends('layout.dashboard')
@section('title')
Add Account
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('user.index')}}">Back</a>
          <h1>Tambah User Account</h1>
        </div>
      </div>
    </div>
    <div class="row">
              @include('include.admin.status')

          <form class="form-horizontal" role="form" method="POST" action="{{route('user.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Username</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Confirm Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>
@endsection