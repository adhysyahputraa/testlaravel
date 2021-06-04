<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	//menyambungkan ke model Penilaian
	function penilaian(){
		return $this->hasMany('App\Penilaian');
	}
    protected $table = 'category';
    protected $fillable = ['id','name','is_publish','created_at','updated_at'];
}
