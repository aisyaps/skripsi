<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class HakiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */ protected $haki;

	 function __construct($haki) {
	        $this->haki = $haki;
	 }
    public function collection()
    {
         return $this->haki;
    }
     public function headings(): array
    {
        return [
        'JUDUL HAKI',
        'PERIODE',
        'PEMEGANG HAK CIPTA',
        'PENCIPTA 1',
        'PENCIPTA 2',
        'PENCIPTA 3',
        'PENCIPTA 4',
        'PENCIPTA 5',
        'PENCIPTA 6',
        'PENCIPTA 7',
        'KELOMPOK KEAHLIAN',
        'JENIS CIPTAAN',
        'TANGGAL',
        'BIAYA PENDAFTARAN',
        'STATUS'
        ];
    }
}
