<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pkrd extends Model
{
    protected $table = 'pkrd';
    protected $fillable = ['id','rencanakerja','justifikasi','tgl_plan','drk','rencanabiaya','kategori','pic','status'];

}
