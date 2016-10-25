<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'tb_info';
    
    protected $fillable=[
    	'nama',
    	'jalan',
    	'kordinat_x',
    	'kordinat_y',
    	'id_kecamatan',
    	'id_kategori'
    ];
    
    public $timestamps = false;

    public function kecamatan()
    {   
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan');
    }

    public function kategori()
    {   
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
