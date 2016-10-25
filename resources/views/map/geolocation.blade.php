@extends('layout.maindashboard')
@section('title')
    Deteksi Lokasi User
@endsection
@section('style')
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@endsection
@section('content')
<div class="col-lg-9">
	{!!$map['html']!!}
</div>
@endsection
@section('script')
@endsection