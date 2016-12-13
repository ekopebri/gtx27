<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Info;
use Input;
use Validator;
use File;
use App\Kategori;
use App\Kecamatan;

class InfoController extends Controller
{

    public function index()
    {
        $info = Info::all();
        return view('info.index', compact('info'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('info.create', compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $info = new Info();
        $this->validate($request, [
            'nama' => 'required',
            'jalan' => 'required',
            'fasilitas' => 'required',
            'speed' => 'required',
            'gambar' => 'required',
            'kordinat_x' => 'required',
            'kordinat_y' => 'required'
        ]);
        $info->nama = $request->nama;
        $info->jalan = $request->jalan;
        $info->fasilitas = $request->fasilitas;
        $info->speed = $request->speed;
        if($request->hasFile('gambar')) {
            $file = Input::file('gambar');            
            $name = $request->nama . '-' . $file->getClientOriginalName();
            $info->gambar = $name;
            $file->move(public_path().'/uploads/', $name);
        }
        $info->kordinat_x = $request->kordinat_x;
        $info->kordinat_y = $request->kordinat_y;
        $info->id_kecamatan = $request->id_kecamatan;
        $info->save();

        return $this->create()->with('success', 'Image Uploaded Successfully');
    }

    public function show(Request $request, $id)
    {
        $info = Info::find($id);
        $kecamatan = Kecamatan::find($info->id_kecamatan);
        $kategori = Kategori::find($info->id_kategori);
        return view('info.show', compact('info', 'kecamatan', 'kategori'));
    }

    public function edit(Request $request, $id)
    {
        $info = Info::find($id);
        $kecamatan = Kecamatan::all();
        return view('info.edit', compact('info', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $info = Info::find($request->id);;
        $this->validate($request, [
            'nama' => 'required',
            'jalan' => 'required',
            'fasilitas' => 'required',
            'speed' => 'required',
            'kordinat_x' => 'required',
            'kordinat_y' => 'required'
        ]);
        $info->nama = $request->nama;
        $info->jalan = $request->jalan;
        $info->fasilitas = $request->fasilitas;
        $info->speed = $request->speed;
        if($request->hasFile('gambar')) {
            $oldName = $info->gambar;
            File::delete('uploads/' . $oldName);
            $file = Input::file('gambar');            
            $name = $request->nama . '-' . $file->getClientOriginalName();
            $info->gambar = $name;
            $file->move(public_path().'/uploads/', $name);
        }
        $info->kordinat_x = $request->kordinat_x;
        $info->kordinat_y = $request->kordinat_y;
        $info->id_kecamatan = $request->id_kecamatan;
        $info->save();

        return $this->create()->with('success', 'Image Uploaded Successfully');    

    }

    public function destroy(Request $request, $id)
    {
        Info::destroy($request->id);
        
        return redirect()->action('InfoController@index');
    }
}
