<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gmaps;
use App\Info;
use App\Kecamatan;
use App\Kategori;
use DB;

class MapController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        return view('map.index', compact('kecamatan', 'kategori'));
    }

    public function kecamatan()
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $info = Info::all();
        $no = 1;
        $infolist = $info->sortBy('id_kecamatan');
        $config['center'] = '-0.4713449, 117.1554112';
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);

        foreach ($info as $key => $info) {
            $marker = array();
            $marker['position'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $marker['draggable'] = TRUE;
            $marker['infowindow_content'] = '<center><strong>' . $no++ . '. ' .$info->nama . '<br>' . $info->jalan . '</strong>';
            $marker['animation'] = 'DROP';
            Gmaps::add_marker($marker);

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        
        $map = Gmaps::create_map();
        return view('map.kecamatan', compact('map', 'kecamatan', 'kategori', 'infolist'));
    }

    public function kategori()
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $no = 1;
        $info = Info::all();
        $infolist = $info->sortBy('id_kategori');
        $config['center'] = '-0.4713449, 117.1554112';
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);

       foreach ($info as $key => $info) {
            $marker = array();
            $marker['position'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $marker['infowindow_content'] = '<center><strong>' . $no++ . '. ' .$info->nama . '<br>' . $info->jalan . '</strong>';
            $marker['draggable'] = TRUE;
            $marker['animation'] = 'DROP';
            Gmaps::add_marker($marker);

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        $map = Gmaps::create_map();
        return view('map.kategori', compact('map', 'kategori', 'kecamatan', 'infolist'));
    }

    public function directions()
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $info = Info::all();
        $config['center'] = '-0.4713449, 117.1554112';
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);
        $nomor = 1;
       foreach ($info as $key => $info) {
            $marker = array();
            $marker['position'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $marker['infowindow_content'] = '<center><strong>' . $nomor++ . '. ' .$info->nama . '<br>' . $info->jalan . '</strong><br>' . "<a href=" . route('map.direction', $info->id) . ">Click To Direction</a>";
            $marker['draggable'] = TRUE;
            $marker['animation'] = 'DROP';
            Gmaps::add_marker($marker);

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        $map = Gmaps::create_map();
        return view('map.directions', compact('map', 'kecamatan', 'kategori'));
    }

    public function kecamatandetail($id)
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $info = DB::table('tb_info')->where('id_kecamatan', '=', $id)->get();
        $infolist = Info::where('id_kecamatan', '=', $id)->get();
        $config['center'] = '-0.4713449, 117.1554112';
        $no = 1;
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);

        foreach ($info as $key => $info) {
            $marker = array();
            $marker['position'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $marker['infowindow_content'] = '<center><strong>' . $no++ . '. ' .$info->nama . '<br>' . $info->jalan . '</strong>';
            $marker['draggable'] = TRUE;
            $marker['animation'] = 'DROP';
            Gmaps::add_marker($marker);

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        
        $map = Gmaps::create_map();
        return view('map.kecamatan', compact('map', 'kecamatan', 'kategori', 'infolist'));
    }

    public function kategoridetail($id)
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $info = DB::table('tb_info')->where('id_kategori', '=', $id)->get();
        $no = 1;
        $infolist = Info::where('id_kategori', '=', $id)->get();
        $config['center'] = '-0.4713449, 117.1554112';
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);
        
        foreach ($info as $key => $info) {
            $marker = array();
            $marker['position'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $marker['draggable'] = TRUE;
            $marker['infowindow_content'] = '<center><strong>' . $no++ . '. ' .$info->nama . '<br>' . $info->jalan . '</strong>';
            $marker['animation'] = 'DROP';
            Gmaps::add_marker($marker);

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        $map = Gmaps::create_map();
        return view('map.kategori', compact('map', 'kategori', 'kecamatan', 'infolist'));
    }    

    //INI CUMA DETECT LOKASI AJA
    public function geolocation()
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $config = array();
		$config['center'] = 'auto';
        $config['zoom'] = 17;
		$config['onboundschanged'] = 'if (!centreGot) {
			var mapCentre = map.getCenter();
			marker_0.setOptions({
				position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
			});
		}
		centreGot = true;';
		Gmaps::initialize($config);
		
		$marker = array();
		Gmaps::add_marker($marker);
        
        $circle = array();
	    $circle['center'] = 'auto';
	    $circle['radius'] = '100';
		GMaps::add_circle($circle);

        $map = Gmaps::create_map();

        return view('map.geolocation', compact('map', 'kecamatan', 'kategori'));

    }

    //INI UNTUK DIRECTION
    public function direction($id)
    {
        $kecamatan = Kecamatan::all();
        $kategori = Kategori::all();
        $info = DB::table('tb_info')->where('id', '=', $id)->get();
        foreach ($info as $info) {
            $config['center'] = 'auto';
            $config['zoom'] = 'auto';
            $config['directions'] = TRUE;
            $config['directionsStart'] = 'auto';
            $config['directionsEnd'] = $info->kordinat_x . ', ' . $info->kordinat_y;
            $config['directionsDivID'] = 'directionsDiv';

            $circle = array();
		    $circle['center'] = $info->kordinat_x . ', ' . $info->kordinat_y;
		    $circle['radius'] = '100';
			GMaps::add_circle($circle);
        }
        
        Gmaps::initialize($config);

        $map = Gmaps::create_map();

        return view('map.direction', compact('map', 'kategori', 'kecamatan'));

    }

}