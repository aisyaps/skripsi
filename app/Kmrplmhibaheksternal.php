<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmrplmhibaheksternal extends Model
{
     protected $table = 'kmrplmhibaheksternal';
    protected $fillable = ['judulpenelitian','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status'];
}
