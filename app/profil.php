<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
   protected $table = 'profil';
    protected $fillable = ['namadosen','nidn','prodi','jeniskk','id_topic'];


    public function topic(){
    	return $this->belongsTo('App\Topic','id_topic');
    }
}
