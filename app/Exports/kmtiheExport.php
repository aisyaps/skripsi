<?php

namespace App\Exports;

use App\Kmtihe;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtiheExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtihe::all();
    }
}
