<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmrplmrekognisi extends Model
{
    protected $table = 'kmrplmrekognisi';
    protected $fillable = ['judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status'];
}
