<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HibahTiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */protected $kmtihe;

	 function __construct($kmtihe) {
	        $this->kmtihe = $kmtihe;
	 }



    public function collection()
    {
        return $this->kmtihe;
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
