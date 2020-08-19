<?php

namespace App\Exports;

use App\Kmtkseae;
use Maatwebsite\Excel\Concerns\FromCollection;

class kmtkseaeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kmtkseae::all();
    }
}
