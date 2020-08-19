<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RekognisiRplmExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $kmrplmrekognisi;

	 function __construct($kmrplmrekognisi) {
	        $this->kmrplmrekognisi = $kmrplmrekognisi;
	 }
    public function collection()
    {
         return $this->kmrplmrekognisi;
    }
     public function headings(): array
    {
        return [
          'JUDUL KEGIATAN',
          'PERIODE',
          'NAMA DOSEN',
          // 'KELOMPOK KEAHLIAN',
          'TANGGAL MULAI',
          'TANGGAL SELESAI',
          'TEMPAT',
	      'PENYELENGGARA',
	      'PRODI DOSEN',
	      'KETERANGAN',
	      'STATUS'
        ];
    }
}
