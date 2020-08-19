<?php

namespace App\Exports;

use App\Publikasiseminar;
use Maatwebsite\Excel\Concerns\FromCollection;

class publikasiseminarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Publikasiseminar::all();
    }
}
