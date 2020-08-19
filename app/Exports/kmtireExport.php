<?php

namespace App\Exports;

use App\Kmtire;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtireExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtire::all();
    }
}
