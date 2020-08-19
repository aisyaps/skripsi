<?php

namespace App\Exports;

use App\Rekognisi;
use Maatwebsite\Excel\Concerns\FromCollection;

class rekognisiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rekognisi::all();
    }
}
