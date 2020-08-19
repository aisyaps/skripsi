<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekognisiTkseExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $kmtksere;

	 function __construct($kmtksere) {
	        $this->kmtksere = $kmtksere;
	 }
    public function collection()
      {
         return $this->kmtksere;
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
