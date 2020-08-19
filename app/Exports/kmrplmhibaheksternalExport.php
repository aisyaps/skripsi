<?php

namespace App\Exports;

use App\Kmrplmhibaheksternal;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmrplmhibaheksternalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmrplmhibaheksternal::all();
    }
}
