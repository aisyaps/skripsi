<?php

namespace App\Exports;

use App\haki;
use Maatwebsite\Excel\Concerns\FromCollection;

class hakiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return haki::all();
    }
}
