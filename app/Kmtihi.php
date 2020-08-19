<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmtihi extends Model
{
    protected $table = 'kmtihi';
    protected $fillable = ['judulpenelitian','periode','peneliti1','anggotapeneliti','kelompokkeahlian','dana_diajukan','dana_disetujui', 'kategori','status'];
}
