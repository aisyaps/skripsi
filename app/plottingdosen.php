<?php

namespace App;//sebutkan name

use Illuminate\Database\Eloquent\Model;

class plottingdosen extends Model//class deg controller
{	
	protected $table='plottingdosen';
    protected $fillable=['judul','file','keterangan'];
}
