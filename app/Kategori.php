<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tb_kategori';
    
    protected $fillable=[
    	'nama_kategori',
    	'keterangan'
    ];
    
    public $timestamps = false;

    public function info()
	{
		return $this->hasOne('App\Info', 'id');
	}
}
