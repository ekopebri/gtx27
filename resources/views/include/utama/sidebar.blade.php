<div class="col-lg-3">
<!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu" >
                    <li id="dropdown">
                        <a href="#"><i class="fa fa-list fa-fw"></i>Kecamatan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::route('map.kecamatan')!!}">Semua Kecamatan</a>
                            </li>
                            @foreach($kecamatan as $kecamatan)
                        	<li>
                        		<a href="{!!route('map.kecamatan.detail', $kecamatan->id)!!}">{{$kecamatan->nama_kecamatan}}</a>
                        	</li>
                        	@endforeach
                        </ul>
                        <!-- second-level-items -->
                    </li>
					<li id="dropdown">
                    	<a href="{!!URL::route('map.directions')!!}">Directions</a>
	                </li>
	                <li id="dropdown">
	                    <a href="{!!URL::route('detect-map')!!}">Deteksi Lokasi</a>
	                </li>
	            </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
</div>