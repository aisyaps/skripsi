<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekognisiTiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $kmtire;

	 function __construct($kmtire) {
	        $this->kmtire = $kmtire;
	 }
    public function collection()
      {
         return $this->kmtire;
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
