@extends('layout.maindashboard')
@section('title')
    Rute Wifi-Corner
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