@extends('layout.dashboard')
@section('title')
    User Table
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
                    	<a type="button" href="{{route('user.create')}}" class="btn btn-info pull-right">Tambah User Baru</a>
                    	<h1>Daftar User</h1>
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
                                        <th>username</th>
                                        <th>email</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($user as $key => $user)
										<tr>
											<td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
											<td>{{$user->email}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('user.show', $user->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('user.edit', $user->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('user.delete', $user->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
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