<?php

namespace App\Exports;

use App\Hibaheksternal;
use Maatwebsite\Excel\Concerns\FromCollection;

class hibaheksternalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hibaheksternal::all();
    }
}
