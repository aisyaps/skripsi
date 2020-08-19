<?php

namespace App\Exports;

use App\Pkrd;
use Maatwebsite\Excel\Concerns\FromCollection;

class pkrdExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pkrd::all();
    }
}
