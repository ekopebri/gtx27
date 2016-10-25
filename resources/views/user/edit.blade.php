@extends('layout.dashboard')
@section('title')
Edit Account {{$user->username}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('user.index')}}">Back</a>
          <h1>Tambah Kecamatan WIFI.ID</h1>
        </div>
      </div>
    </div>
    <div class="row">
    @include('include.admin.status')
      {!!Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user->id],'enctype' => 'multipart/form-data'])!!}
        <div class="row">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$user->id}}">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="name" value="{{$user->name}}" placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="{{$user->email}}" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
          </div>
        </div>
        <input type="submit" value="save" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection