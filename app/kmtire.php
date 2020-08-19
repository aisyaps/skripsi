<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmtire extends Model
{
     protected $table = 'kmtire';
    protected $fillable = ['judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status'];
}
