<?php

namespace App\Exports;

use App\Kmtips;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtipsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtips::all();
    }
}
