<?php

namespace App\Exports;

use App\Kmtksere;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtksereExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtksere::all();
    }
}
