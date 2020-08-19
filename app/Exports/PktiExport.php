<?php

namespace App\Exports;

use App\Pkti;
use Maatwebsite\Excel\Concerns\FromCollection;

class PktiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pkti::all();
    }
}
