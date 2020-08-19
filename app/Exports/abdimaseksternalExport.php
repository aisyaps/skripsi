<?php

namespace App\Exports;

use App\abdimaseksternal;
use Maatwebsite\Excel\Concerns\FromCollection;

class abdimaseksternalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return abdimaseksternal::all();
    }
}
