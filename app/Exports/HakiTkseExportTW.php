<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class HakiTkseExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */ protected $kmtksehk;

	 function __construct($kmtksehk) {
	        $this->kmtksehk = $kmtksehk;
	 }
    public function collection()
    {
         return $this->kmtksehk;
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
        // 'KELOMPOK KEAHLIAN',
        'JENIS CIPTAAN',
        'TANGGAL',
        'BIAYA PENDAFTARAN',
        'STATUS'
        ];
    }
}
