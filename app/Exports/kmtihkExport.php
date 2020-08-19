<?php

namespace App\Exports;

use App\Kmtihk;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtihkExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtihk::all();
    }
}
