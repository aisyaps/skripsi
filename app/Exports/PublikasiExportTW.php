<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class PublikasiExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
	/**
  *@return \Illuminate\Support\Collection
    */
   
    protected $publikasiseminar;

	 function __construct($publikasiseminar) {
	        $this->publikasiseminar = $publikasiseminar;
	 }



    public function collection()
    {
        return $this->publikasiseminar;
    }
     public function headings(): array
    {
        return [
           'judulpenelitian',
           'periode',
           'penulis1',
           'anggotapenulis2',
           'anggotapenulis3',
           'anggotapenulis4',
           'anggotapenulis5',
           'kelompok keahlian',
           'kategori',
            'nama',
            'publisher atau lokasi',
            'vol/nojurnal/ tgl seminar',
            'biaya publikasi',
            'stimulus',
            'keterangan',
            'status'
        ];
    }
}
