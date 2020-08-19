<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
   protected $table='topic';
   protected $fillable=['namatopic'];


	public function profil(){
		return $this->hasMany('App\Profil','id_topic');
	}

}
