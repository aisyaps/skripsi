<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmtksehe extends Model
{
     protected $table = 'kmtksehe';
    protected $fillable = ['judulpenelitian','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status'];

}
