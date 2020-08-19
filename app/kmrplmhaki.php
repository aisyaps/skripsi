<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmrplmhaki extends Model
{
    protected $table = 'kmrplmhaki';
    protected $fillable = ['id','judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','jenisciptaan', 'tgl','biayapendaftaran','status'];
}
