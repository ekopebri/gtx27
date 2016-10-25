@extends('layout.dashboard')
@section('title')
Kecamatan {{$kecamatan->nama_kecamatan}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kecamatan.index')}}">Back</a>
          <h1>Kecamatan {{$kecamatan->nama_kecamatan}} </h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Tempat</label>
              <p>{{$kecamatan->nama_kecamatan}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection