<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HibahRplmExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */ protected $kmrplmhibaheksternal;

	 function __construct($kmrplmhibaheksternal) {
	        $this->kmrplmhibaheksternal = $kmrplmhibaheksternal;
	 }



    public function collection()
    {
        return $this->kmrplmhibaheksternal;
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
