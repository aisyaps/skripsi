<?php

namespace App\Exports;

use App\Kmrplmpublikasiseminar;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmrplmpublikasiseminarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmrplmpublikasiseminar::all();
    }
}
