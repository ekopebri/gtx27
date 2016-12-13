@extends('layout.dashboard')
@section('title')
Informasi {{$info->nama}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('info.index')}}">Back</a>
          <h1>Info {{$info->nama}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Tempat</label>
              <p>{{$info->nama}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <p>{{$info->jalan}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Fasilitas</label>
              <p>{{$info->fasilitas}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Kecepatan Wi-Fi</label>
              <p>{{$info->speed}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Gambar</label>
              <img src="{{asset('uploads').'/'}}{{$info->gambar}}" width="900px" class="img-responsive">
            </div>
          </div>
		      <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Latitude</label>
              <p>{{$info->kordinat_x}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Longitude</label>
              <p>{{$info->kordinat_y}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
  			  <label for="sel1">Kecamatan</label>
              <p>{{$kecamatan->nama_kecamatan}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection