<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kmrplmabdimaseksternal extends Model
{
    protected $table = 'kmrplmabdimaseksternal';
    protected $fillable = ['judulkegiatanpengmas','periode','namadosen1', 'namadosen2','namadosen3','namadosen4','namadosen5','namamahasiswa1','namamahasiswa2','namamahasiswa3','namamahasiswa4','namamahasiswa5','tgl','tempat', 'prodidosen','prodidosen2','prodidosen3','prodidosen4','prodidosen5','kategori','biaya','status'];
}
