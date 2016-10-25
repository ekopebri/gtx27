<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'tb_kecamatan';
    
    protected $fillable=[
    	'nama_kecamatan'
    ];
    
    public $timestamps = false;

    public function info()
	{
		return $this->hasMany('App\Info', 'id');
	}
}
