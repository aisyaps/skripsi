<?php

namespace App\Exports;

use App\Kmrplmhaki;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmrplmhakiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmrplmhaki::all();
    }
}
