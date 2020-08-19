<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class HibahExportTW implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $hibaheksternal;

	 function __construct($hibaheksternal) {
	        $this->hibaheksternal = $hibaheksternal;
	 }



    public function collection()
    {
        return $this->hibaheksternal;
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
            'DANA DIAJUKAN',
            'DANA DISETUJUI',
            'KATEGORI',
            'KETERANGAN',
            'STATUS'
        ];
    }
}
