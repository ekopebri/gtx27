@extends('layout.dashboard')
@section('title')
Edit Kecamatan {{$kecamatan->nama_kecamatan}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kecamatan.index')}}">Back</a>
          <h1>Edit Data Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
      {!!Form::model($kecamatan, ['method' => 'PUT', 'route' => ['kecamatan.update', $kecamatan->id],'enctype' => 'multipart/form-data'])!!}
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
        <input type="hidden" name="id" value="{{$kecamatan->id}}">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Kecamatan</label>
              <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" placeholder="Nama Tempat" class="form-control">
            </div>
          </div>
          </div>
        <input type="submit" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection