@extends('layout.maindashboard')
@section('title')
    Rute Wifi-Corner
@endsection
@section('style')
@endsection
@section('content')
<div class="col-lg-9">
	<strong><center><i class="h4">Detail Lokasi</i></center></strong>
	<img src="{{asset('uploads').'/'}}{{$info->gambar}}" width="900px" class="img-responsive"> <br>
	<table class="table table-striped">
		<tr>
			<td>Nama Lokasi</td>
			<td>:</td>
			<td>{{$info->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$info->jalan}}</td>
		</tr>
		<tr>
			<td>Kecepatan WIFI</td>
			<td>:</td>
			<td>{{$info->speed}}</td>
		</tr>
		<tr>
			<td>Fasilitas</td>
			<td>:</td>
			<td>{{$info->fasilitas}}</td>
		</tr>
		<tr>
			<td>Jarak</td>
			<td>:</td>
			<td><div id="jarak"></div></td>
		</tr>
		<tr>
			<td>Latitude</td>
			<td>:</td>
			<td>{{$info->kordinat_x}}</td>
		</tr>
		<tr>
			<td>Longitude</td>
			<td>:</td>
			<td>{{$info->kordinat_y}}</td>
		</tr>
	</table>
	<a href="{{route('map.direction', $info->id)}}" class="center"><button class="btn btn-primary btn-block">Lihat Rute</button></a>
</div>
@endsection
@section('script')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBwTrYTRneUmRCKNcie73nVxdh8slf0_9c&sensor=false"></script>
<script type="text/javascript">
navigator.geolocation.getCurrentPosition(function(position){
	var latitude  = position.coords.latitude;
	var longitude = position.coords.longitude;
	var destlat = {{$info->kordinat_x}};
	var destlong = {{$info->kordinat_y}};
	var origin = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
	    destination = new google.maps.LatLng(destlat, destlong),
	    service = new google.maps.DistanceMatrixService();

	service.getDistanceMatrix(
	    {
	        origins: [origin],
	        destinations: [destination],
	        travelMode: google.maps.TravelMode.DRIVING,
	        avoidHighways: false,
	        avoidTolls: false
	    }, 
	    callback
	);

	function callback(response, status) {
	    var jarak = document.getElementById("jarak");

	    if(status=="OK") {
	        jarak.innerHTML = response.rows[0].elements[0].distance.text;
	    } else {
	        alert("Error: " + status);
	    }
	}
});
</script>
@endsection