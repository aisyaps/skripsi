<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontrakmanajemen extends Model
{
    protected $table = 'kontrakmanajemen ';
    protected $fillable = ['id','rencanakerja','justifikasi','tgl_plan','drk','rencanabiaya','kategori','pic','status'];
}
 