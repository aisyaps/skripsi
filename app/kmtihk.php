<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmtihk extends Model
{
    protected $table = 'kmtihk';
    protected $fillable = ['id','judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','jenisciptaan', 'tgl','biayapendaftaran','status'];
  
}
