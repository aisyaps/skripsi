<?php

namespace App\Exports;

use App\Kmtksehe;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtkseheExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtksehe::all();
    }
}
