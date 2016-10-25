@extends('layout.dashboard')
@section('title')
Edit Kategori {{$kategori->nama_kategori}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Back</a>
          <h1>Edit Kategori {{$kategori->nama_kategori}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
      {!!Form::model($kategori, ['method' => 'PUT', 'route' => ['kategori.update', $kategori->id],'enctype' => 'multipart/form-data'])!!}
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
        <input type="hidden" name="id" value="{{$kategori->id}}">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}" placeholder="Nama Kategori" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" value="{{$kategori->keterangan}}" name="keterangan" placeholder="Keterangan" class="form-control">
            </div>
          </div>
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection