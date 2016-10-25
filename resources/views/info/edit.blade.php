@extends('layout.dashboard')
@section('title')
Edit Informasi {{$info->nama}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('info.index')}}">Back</a>
          <h1>Edit Informasi {{$info->nama}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
      {!!Form::model($info, ['method' => 'PUT', 'route' => ['info.update', $info->id],'enctype' => 'multipart/form-data'])!!}
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
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$info->id}}">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Tempat</label>
              <input type="text" name="nama" id="nama" value="{{$info->nama}}" placeholder="Nama Tempat" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" value="{{$info->jalan}}" name="jalan" id="jalan" placeholder="Alamat" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Latitude</label>
              <input type="text" name="kordinat_x" value="{{$info->kordinat_x}}" id="kordinat_x" placeholder="Latitude" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Longitude</label>
              <input type="text" name="kordinat_y" value="{{$info->kordinat_y}}" id="kordinat_y" placeholder="Longitude" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
          <label for="sel1">Kecamatan</label>
          <select class="form-control" name="id_kecamatan">
            @foreach($kecamatan as $kecamatan)
            <option value="{{$kecamatan->id}}" @if($info->id_kecamatan == $kecamatan->id) selected='selected' @endif>{{$kecamatan->nama_kecamatan}}</option>
            @endforeach
          </select>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
          <label for="sel1">Kategori</label>
          <select class="form-control" name="id_kategori">
            @foreach($kategori as $kategori)
            <option value="{{$kategori->id}}" @if($info->id_kategori == $kategori->id) selected='selected' @endif.>{{$kategori->nama_kategori}}</option>
            @endforeach
          </select>
            </div>
          </div>
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection