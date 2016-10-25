<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;
use Validator;

class KecamatanController extends Controller
{
    
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('kecamatan.index', compact('kecamatan'));
    }

    public function create()
    {
        return view('kecamatan.create');
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'nama_kecamatan' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $kecamatan = new Kecamatan;
            $kecamatan->nama_kecamatan = $request->nama_kecamatan;
            $kecamatan->save();

            return redirect()->action('KecamatanController@index');
        }
        
    }

    public function show(Request $request, $id)
    {
        $kecamatan = Kecamatan::find($id);
        return view('kecamatan.show', compact('kecamatan'));
    }

    public function edit(Request $request, $id)
    {
        $kecamatan = Kecamatan::find($id);
        return view('kecamatan.edit', compact('kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'nama_kecamatan' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $kecamatan = Kecamatan::find($request->id);
            $kecamatan->nama_kecamatan = $request->nama_kecamatan;
            $kecamatan->save();

            return redirect()->action('KecamatanController@index');
        }
    }

    public function destroy(Request $request, $id)
    {
        Kecamatan::destroy($request->id);
        
        return redirect()->action('KecamatanController@index');
    }
}
