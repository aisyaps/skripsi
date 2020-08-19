<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PkrplmExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Pkrd;
use App\Pkrplm;
use App\Pktkse;
use App\Pkti;

class CetakpkController extends Controller
{
     public function index()
    {
        $data=[];
    	return view('cetakpk.index',compact('data'));
    }


    public function search(Request $request)
    {


    	$this->validate($request,[
    		'dari'=> 'required',
    		'sampai'=>'required'


    	]);
        $kelompokkeahlian = $request->kelompokkeahlian;
    	//menampung dari variabel dari
    	$dari =date('Y-m-d', strtotime( $request->dari));
    	$sampai = date('Y-m-d', strtotime( $request->sampai));

        if($request->kelompokkeahlian=='rekayasa data'){
            $data= Pkrd::whereBetween('tgl_plan', [$dari,$sampai])->get();
        }else if($request->kelompokkeahlian=='rekayasa perangkat lunak dan multimedia'){
            $data= Pkrplm::whereBetween('tgl_plan', [$dari,$sampai])->get();
        }else if($request->kelompokkeahlian=='tata kelola dan sistem enterprise'){
            $data= Pktkse::whereBetween('tgl_plan', [$dari,$sampai])->get();
        }else{
            $data= Pkti::whereBetween('tgl_plan', [$dari,$sampai])->get();
        }
    	
    	return view('cetakpk.index', compact('data','dari','sampai','kelompokkeahlian'));
    }


    public function exportCetakPK(Request $request)
    {
    

         return Excel::download (new PkrplmExport ($request->dari, $request->sampai), 'laporanproker.xlsx');
    }

}

