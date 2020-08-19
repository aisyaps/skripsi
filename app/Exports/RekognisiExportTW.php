<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekognisiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $rekognisi;

	 function __construct($rekognisi) {
	        $this->rekognisi = $rekognisi;
	 }
    public function collection()
   {
         return $this->rekognisi;
    }
     public function headings(): array
    {
        return [
          'JUDUL KEGIATAN',
          'PERIODE',
          'NAMA DOSEN',
          'KELOMPOK KEAHLIAN',
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
