<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekognisi extends Model
{
    protected $table = 'rekognisi';
    protected $fillable = ['id','judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status'];
}

