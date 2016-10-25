@extends('layout.dashboard')
@section('title')
Create Kecamatan Data
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kecamatan.index')}}">Back</a>
          <h1>Tambah Data Kecamatan</h1>
        </div>
      </div>
    </div>
    <div class="row">
      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{route('kecamatan.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Kecamatan</label>
              <input type="text" name="nama_kecamatan" placeholder="Nama Kecamatan" class="form-control">
            </div>
          </div>
        </div>
        <input type="submit" value="save" id="save" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection