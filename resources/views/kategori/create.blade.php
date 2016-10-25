@extends('layout.dashboard')
@section('title')
Create Kategori Data
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Back</a>
          <h1>Tambah Kategori Data</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
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
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Tempat</label>
              <input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
            </div>
          </div>
          </div>
        <input type="submit" value="save" id="save" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection