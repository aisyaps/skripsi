<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AbdimasTkseExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */  protected $kmtkseae;

	 function __construct($kmtkseae) {
	        $this->kmtkseae = $kmtkseae;
	 }
    public function collection()
    {
         return $this->kmtkseae;
    }
     public function headings(): array
    {
        return [
         'JUDUL KEGIATAN PENGMAS',
         'PERIODE',
         'NAMA DOSEN 1',
         'NAMA DOSEN 2',
         'NAMA DOSEN 3',
         'NAMA DOSEN 4',
         'NAMA DOSEN 5',
         'NAMA MAHASISWA 1',
         'NAMA MAHASISWA 2',
         'NAMA MAHASISWA 3',
         'NAMA MAHASISWA 4',
         'NAMA MAHASISWA 5',
         // 'KELOMPOK KEAHLIAN',
         'TANGGAL',
         'TEMPAT',
	      'PRODI DOSEN 1',
	      'PRODI DOSEN 2',
	      'PRODI DOSEN 3',
	      'PRODI DOSEN 4',
	      'PRODI DOSEN 5',
	      'KATEGORI',
	      'BIAYA',
	      'STATUS'
        ];
    }
}
