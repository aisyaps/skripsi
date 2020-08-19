<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pkti extends Model
{
     protected $table = 'pkti';
    protected $fillable = ['id','rencanakerja','justifikasi','tgl_plan','drk','rencanabiaya','kategori','pic','status'];
}
