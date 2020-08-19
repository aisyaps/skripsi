<?php

namespace App\Exports;

use App\kmtiae;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtiaeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kmtiae::all();
    }
}
