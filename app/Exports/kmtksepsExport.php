<?php

namespace App\Exports;

use App\Kmtkseps;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtksepsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtkseps::all();
    }
}
