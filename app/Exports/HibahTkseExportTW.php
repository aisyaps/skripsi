<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HibahTkseExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */protected $kmtksehe;

	 function __construct($kmtksehe) {
	        $this->kmtksehe = $kmtksehe;
	 }



    public function collection()
    {
        return $this->kmtksehe;
    }
     public function headings(): array
    {
        return [
            'JUDUL PENELITIAN',
            'PERIODE',
            'PENELITI 1',
            'ANGGOTA PENELITI 2',
            'ANGGOTA PENELITI 3',
            'ANGGOTA PENELITI 4',
            // 'KELOMPOK KEAHLIAN',
            'DANA DIAJUKAN',
            'DANA DISETUJUI',
            'KATEGORI',
            'KETERANGAN',
            'STATUS'
        ];
    }
}
