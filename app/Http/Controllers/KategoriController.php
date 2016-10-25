<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Kategori;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'nama_kategori' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $kategori = new Kategori;
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->keterangan = $request->keterangan;
            $kategori->save();
    
            return redirect()->action('KategoriController@index');
        }
    }

    public function show(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'nama_kategori' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $kategori = Kategori::find($request->id);
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->keterangan = $request->keterangan;
            $kategori->save();

            return redirect()->action('KategoriController@index');
        }
    }

    public function destroy(Request $request, $id)
    {
        Kategori::destroy($request->id);
        
        return redirect()->action('KategoriController@index');
    }
}
