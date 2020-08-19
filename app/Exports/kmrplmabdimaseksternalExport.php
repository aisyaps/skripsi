<?php

namespace App\Exports;

use App\Kmrplmabdimaseksternal;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmrplmabdimaseksternalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmrplmabdimaseksternal::all();
    }
}
