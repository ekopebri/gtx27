@extends('layout.dashboard')
@section('title')
Show Detail Account {{$user->name}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('user.index')}}">Back</a>
          <h1>Account {{$user->name}} </h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Username</label>
              <p>{{$user->name}}</p>
            </div>
            <div class="form-group">
              <label>Email</label>
              <p>{{$user->email}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection