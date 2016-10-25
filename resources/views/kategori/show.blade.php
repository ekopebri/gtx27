@extends('layout.dashboard')
@section('title')
Kategori {{$kategori->nama_kategori}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Back</a>
          <h1>kategori {{$kategori->nama_kategori}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Kategori</label>
              <p>{{$kategori->nama_kategori}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Katerangan</label>
              <p>{{$kategori->keterangan}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection