@extends('layout.dashboard')
@section('title')
    Informasi Table
@endsection
@section('style')
    <link href="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.css')!!}" rel="stylesheet" />
@endsection
@section('content')
    <!--  wrapper -->
    <div id="wrapper">
        <!--  page-wrapper -->
        <div id="page-wrapper">
			
				
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                    	<a type="button" href="{{route('info.create')}}" class="btn btn-info pull-right">Tambah Informasi Baru</a>
                    	<h1>Daftar Tempat Wifi Corner</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
										<th>ID</th>
										<th>Nama Tempat</th>
                                        <th>Alamat</th>
                                        <th>Fasilitas</th>
                                        <th>Kecepatan Wifi</th>
										<th>Image</th>
										<th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Kecamatan</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($info as $key => $info)
										<tr>
											<td>{{$info->id}}</td>
											<td width="50px">{{$info->nama}}</td>
                                            <td>{{$info->jalan}}</td>
                                            <td>{{$info->fasilitas}}</td>
                                            <td>{{$info->speed}}</td>
											<td>{{$info->gambar}}</td>
											<td>{{$info->kordinat_x}}</td>
                                            <td>{{$info->kordinat_y}}</td>
                                            <td>{{$info->kecamatan->nama_kecamatan}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('info.show', $info->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('info.edit', $info->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('info.delete', $info->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
@section('script')
    <script src="{!!asset('assets/plugins/dataTables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.js')!!}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection