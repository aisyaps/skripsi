<?php

namespace App\Exports;

use App\Kmrplmrekognisi;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmrplmrekognisiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmrplmrekognisi::all();
    }
}
