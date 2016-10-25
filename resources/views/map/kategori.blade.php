@extends('layout.maindashboard')
@section('title')
    Lokasi Wifi-Corner Berdasar Kategori
@endsection
@section('style')
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@endsection
@section('content')
<div class="col-lg-9">
    {!!$map['html']!!}
</div>
<div class="col-lg-3"></div>
<div class='col-lg-9'>
	<div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<tbody>
						<?php $no = 1; ?>
						@foreach($infolist as $info)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$info->nama}}</td>
							<td>{{$info->jalan}}</td>
							<td>{{$info->kecamatan->nama_kecamatan}}</td>
							<td>{{$info->kategori->nama_kategori}}</td>
							<td>
								<a class="btn btn-danger btn-primary" href='{{route('map.direction', $info->id)}}'>Lihat Rute</a>
							</td>
						</tr>
						@endforeach
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection