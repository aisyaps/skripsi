<?php

namespace App\Exports;

use App\Pkrd;
use App\Pkrplm;
use App\Pktkse;
use App\Pkti;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use Illuminate\Http\Request;

class PkrplmExport implements FromView, ShouldAutoSize, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo Telkom');
        $drawing->setPath(public_path('/logo1.jpg'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('A1');

        return $drawing;
    }


    public function view(): View
    {	$coba = request()->all();

    	if($coba['kelompokkeahlian']=='rekayasa data'){
            $data= Pkrd::whereBetween('tgl_plan', [$coba['dari'],$coba['sampai']])->get();
            $ketuakk="Apri Junaidi S.Kom, M.Kom, MCS";
            $nik="34324432";
        }else if($coba['kelompokkeahlian']=='rekayasa perangkat lunak dan multimedia'){
            $data= Pkrplm::whereBetween('tgl_plan',[$coba['dari'],$coba['sampai']])->get();
             $ketuakk="Condro Kartiko, S.KOm, M.Kom";
             $nik="343243243";
        }else if($coba['kelompokkeahlian']=='tata kelola dan sistem enterprise'){
            $data= Pktkse::whereBetween('tgl_plan',[$coba['dari'],$coba['sampai']])->get();
             $ketuakk="Yudha Saintika S.Kom, M.T.I";
             $nik='1890124';
        }else{
            $data= Pkti::whereBetween('tgl_plan',[$coba['dari'],$coba['sampai']])->get();
             $ketuakk="Aditya Wijayanto";
             $nik="245554";
        }

        // dd($data);
        return view('cetakpk.export_pkrplm',[

        	'dari'=>$coba['dari'],
        	'sampai'=>$coba['sampai'],
        	'data'=>$data,
            'ketuakk'=>$ketuakk, 
            'nik'=>$nik

        ]);
    }
}
