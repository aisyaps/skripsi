<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pkrplm extends Model
{
    protected $table = 'pkrplm';
    protected $fillable = ['rencanakerja','justifikasi','tgl_plan','drk','rencanabiaya','kategori','pic','status'];
}
