<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pktkse extends Model
{
     protected $table = 'pktkse';
    protected $fillable = ['id','rencanakerja','justifikasi','tgl_plan','drk','rencanabiaya','kategori','pic','status'];
}
