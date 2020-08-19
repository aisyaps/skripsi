<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmtksere extends Model
{
    protected $table = 'kmtksere';
    protected $fillable = ['judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status'];
}
