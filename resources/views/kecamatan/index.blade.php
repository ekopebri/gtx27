@extends('layout.dashboard')
@section('title')
    Info Table
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
                    	<a type="button" href="{{route('kecamatan.create')}}" class="btn btn-info pull-right">Tambah Kecamatan Baru</a>
                    	<h1>Daftar Kecamatan</h1>
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
										<th>Nama Kecamatan</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($kecamatan as $key => $kecamatan)
										<tr>
											<td>{{$kecamatan->id}}</td>
											<td>{{$kecamatan->nama_kecamatan}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('kecamatan.show', $kecamatan->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('kecamatan.edit', $kecamatan->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('kecamatan.delete', $kecamatan->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
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