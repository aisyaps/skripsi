<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PublikasiTiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $kmtips;

	 function __construct($kmtips) {
	        $this->kmtips = $kmtips;
	 }
    public function collection()
    {
         return $this->kmtips;
    }
     public function headings(): array
    {
        return [
          'JUDUL PENELITIAN',
           'PERIODE',
           'PENULIS 1',
           'ANGGOTA PENULIS 2',
           'ANGGOTA PENULIS 3',
            'ANGGOTA PENULIS 4',
            'ANGGOTA PENULIS 5',
           // 'kelompok keahlian',
           'KATEGORI',
           'NAMA JURNAL/ SEMINAR ',
           'PUBLISHER ATAU LOKASAI',
           'VOL/NO. JURNAL/TGL SEMINAR',
           'BIAYA PUBLIKASI',
           'STIMULUS',
           'KETERANGAN',
           'STATUS'
        ];
    }
}
