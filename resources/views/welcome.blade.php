<html lang="en"><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>    Deteksi Lokasi User
</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://localhost/sig/public/assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://localhost/sig/public/assets/css/android.css">
    <link rel="stylesheet" href="http://localhost/sig/public/assets/css/logo-nav.css">
    <link href="http://localhost/sig/public/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/sig/public/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
    <link href="http://localhost/sig/public/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost/sig/public/assets/css/main-style.css" rel="stylesheet">
    <link href="http://localhost/sig/public/assets/plugins/social-buttons/social-buttons.css" rel="stylesheet">
    <style type="text/css">
    .navbar-custom {
        background-color:#EB1B24;
        color:#ffffff;
        border-radius:0;
    }

    .navbar-custom .navbar-nav > li > a {
        color:#fff;
    }
    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
        color: #ffffff;
        background-color:transparent;
    }
    .navbar-custom .navbar-brand {
        color:#eeeeee;
    }
    #dropdown {
        background-color: #EB1B24;
    }
    #font-dropdown{
        color: #fff;
    }

    #side-menu a {
        color: #fff;
        border-bottom: 1px solid #FFF !important;
        height: 55px;
    }
    

    }
    </style>
    <script type="text/javascript" style="">var centreGot = false;</script>
    
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwTrYTRneUmRCKNcie73nVxdh8slf0_9c&amp;callback=initMap&amp;language=id"></script>
            <script type="text/javascript">
            //<![CDATA[
            
            var map; // Global declaration of the map
            var lat_longs_map = new Array();
            var markers_map = new Array();
            var iw_map;
            
            iw_map = new google.maps.InfoWindow();

                 function initialize_map() {

                
                var myOptions = {
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                // Try W3C Geolocation (Preferred)
                if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        map.setCenter(new google.maps.LatLng(position.coords.latitude,position.coords.longitude));
                    }, function() { alert("Unable to get your current position. Please try again. Geolocation service failed."); });
                // Browser doesn't support Geolocation
                }else{
                    alert('Your browser does not support geolocation.');
                }
            google.maps.event.addListener(map, "bounds_changed", function(event) {
                if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
            });
        }
        centreGot = true;
            });
            
            var markerOptions = {
                map: map
            };
            marker_0 = createMarker_map(markerOptions);
            
                var circleCenter = new google.maps.LatLng(0, 0)
                lat_longs_map.push(new google.maps.LatLng(0, 0));
            
                var circleOptions = {
                    strokeColor: "0.8",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.3,
                    map: map,
                    center: circleCenter,
                    radius: 100
                };
                var circle_0 = new google.maps.Circle(circleOptions);
            

            }

        
        function createMarker_map(markerOptions) {
            var marker = new google.maps.Marker(markerOptions);
            markers_map.push(marker);
            lat_longs_map.push(marker.getPosition());
            return marker;
        }
        
            google.maps.event.addDomListener(window, "load", initialize_map);
            
            //]]>
            </script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/infowindow.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/marker.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/geometry.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/poly.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/26/8/intl/id_ALL/controls.js"></script></head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/sig/public/distanceMatrix">
                <img src="http://localhost/sig/public/images/logo.JPG" class="img-responsive" alt="" width="100" height="10">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="http://localhost/sig/public/map/kecamatan">Kecamatan</a>
                </li>
                <li class="dropdown">
                    <a href="http://localhost/sig/public/map/kategori">Kategori</a>
                </li>
                <li>
                    <a href="http://localhost/sig/public/map/directions">Directions</a>
                </li>
                <li>
                    <a href="http://localhost/sig/public/deteksi-lokasi">Deteksi Lokasi</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- SideBAR-->
        <div class="col-lg-3">
<!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li id="dropdown">
                        <a href="#"><i class="fa fa-list fa-fw"></i>Kecamatan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="http://localhost/sig/public/map/kecamatan">Semua Kecamatan</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kecamatan/1">Samarinda Utara</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kecamatan/2">Samarinda Ilir</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kecamatan/3">Samarinda Kota</a>
                            </li>
                                                    </ul>
                        <!-- second-level-items -->
                    </li>
                    <li id="dropdown">
                        <a href="#"><i class="fa fa-list fa-fw"></i>Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="http://localhost/sig/public/map/kategori">Semua Kategori</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/1">Cafe</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/2">Kantor</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/3">Universitas</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/4">Corner</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/5">Sekolah</a>
                            </li>
                                                        <li>
                                <a href="http://localhost/sig/public/map/kategori/6">Warung Makan</a>
                            </li>
                                                    </ul>
                        <!-- second-level-items -->
                    </li>
                    <li id="dropdown">
                        <a href="http://localhost/sig/public/map/directions">Directions</a>
                    </li>
                    <li id="dropdown">
                        <a href="http://localhost/sig/public/deteksi-lokasi">Deteksi Lokasi</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
</div>
        <!-- content -->
        <div class="col-lg-9">
    <div id="map_canvas" style="width: 100%; height: 450px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; background-color: rgb(229, 227, 223);"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;" class="gm-style"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: -4px; top: 0px; z-index: 1; width: 100%; transform-origin: 458px 229px 0px;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: 267px; top: -56px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 267px; top: 200px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 11px; top: -56px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 11px; top: 200px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 523px; top: -56px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 523px; top: 200px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -245px; top: -56px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -245px; top: 200px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 779px; top: -56px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 779px; top: 200px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 30;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 267px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 267px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 11px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 11px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 523px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 523px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -245px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -245px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 779px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 779px; top: 200px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 267px; top: -56px;"><canvas draggable="false" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" height="256" width="256"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 267px; top: 200px;"><canvas draggable="false" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" height="256" width="256"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 11px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 11px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 523px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 523px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -245px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -245px; top: 200px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 779px; top: -56px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 779px; top: 200px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: 267px; top: -56px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216376!3i131431!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=90360" draggable="false" alt=""></div></div><div style="position: absolute; left: 267px; top: 200px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216376!3i131432!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=12491" draggable="false" alt=""></div></div><div style="position: absolute; left: 11px; top: -56px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216375!3i131431!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=41571" draggable="false" alt=""></div></div><div style="position: absolute; left: 11px; top: 200px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216375!3i131432!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=94773" draggable="false" alt=""></div></div><div style="position: absolute; left: 523px; top: -56px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216377!3i131431!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=8078" draggable="false" alt=""></div></div><div style="position: absolute; left: 523px; top: 200px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216377!3i131432!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=61280" draggable="false" alt=""></div></div><div style="position: absolute; left: -245px; top: -56px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216374!3i131431!4i256!2m3!1e0!2sm!3i366038314!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=98566" draggable="false" alt=""></div></div><div style="position: absolute; left: -245px; top: 200px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216374!3i131432!4i256!2m3!1e0!2sm!3i366038314!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=20697" draggable="false" alt=""></div></div><div style="position: absolute; left: 779px; top: -56px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216378!3i131431!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=56867" draggable="false" alt=""></div></div><div style="position: absolute; left: 779px; top: 200px; transition: opacity 200ms ease-out 0s;"><div style="z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i216378!3i131432!4i256!2m3!1e0!2sm!3i366038879!3m9!2sid!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=110069" draggable="false" alt=""></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;" class="gm-style-pbc"><p class="gm-style-pbt">Gunakan dua jari untuk menggerakkan peta</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: -4px; top: 0px; z-index: 4; width: 100%; transform-origin: 458px 229px 0px;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div style="z-index: -202; cursor: pointer; display: none;"><div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;" src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false"></div></div></div></div><div style="width: 1px; height: 1px; z-index: 1000; position: absolute; left: 432px; top: 207px;"></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=-0.494512,117.148082&amp;z=18&amp;t=m&amp;hl=id&amp;gl=US&amp;mapclient=apiv3" title="Klik untuk melihat area ini di Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 274px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Data Peta</div><div style="font-size: 13px;">Data peta ©2016 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 218px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Data Peta</a><span style="">Data peta ©2016 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Data peta ©2016 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 120px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/id_US/help/terms_maps.html" target="_blank">Syarat Penggunaan</a></div></div><div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control"></div><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Laporkan kesalahan dalam peta jalan atau citra ke Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@-0.494512,117.1480822,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Laporkan kesalahan peta</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;" draggable="false" controlwidth="28" controlheight="93"><div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;" controlwidth="28" controlheight="55"><div draggable="false" style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Perbesar" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Perkecil" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div></div></div><div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;" aria-label="Kontrol Pegman Street View"><img style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Pegman ada di bagian atas Peta"><img style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Kontrol Pegman Street View"><img style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;" title="Putar peta 90 derajat"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);" class="gm-tilt"><img style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 21px; font-weight: 500;" draggable="false" title="Tunjukkan peta jalan">Peta</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 32px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Tunjukkan peta jalan dengan medan"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Medan</label></div></div></div><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-left: 0px none; min-width: 29px;" draggable="false" title="Tunjukkan citra satelit">Satelit</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 32px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Tunjukkan citra dengan nama jalan"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Label</label></div></div></div></div></div></div></div>
</div>
    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="http://localhost/sig/public/assets/plugins/jquery-1.10.2.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="http://localhost/sig/public/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/sig/public/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="http://localhost/sig/public/assets/scripts/siminta.js"></script>






</body></html>