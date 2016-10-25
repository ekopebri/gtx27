@if (isset($errors) && count($errors->all()) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong>
		There were some problems with your input.<br><br>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif