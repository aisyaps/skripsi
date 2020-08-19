<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publikasiseminar extends Model
{
    protected $table = 'publikasiseminar';
    protected $fillable = ['judulpenelitian','periode','penulis1','anggotapenulis2','anggotapenulis3','anggotapenulis4','anggotapenulis5','kategori', 'nama','publisherlokasi','volnojurnaltglsem','biayapublikasi','stimulus','keterangan','status'];
}



          