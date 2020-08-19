<?php

namespace App\Exports;

use App\Kmtksehk;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtksehkExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtksehk::all();
    }
}
