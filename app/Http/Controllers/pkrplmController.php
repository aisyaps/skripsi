<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkrplm;
// use App\Exports\PkrplmExport;
// use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class pkrplmController extends Controller
{
    public function index(Request $request){

        $data_pkrplm = \App\Pkrplm::all();
   		return view('pkrplm.index', ['data_pkrplm' => $data_pkrplm]);
   }

    public function create(Request $request)
  {	
    \App\Pkrplm::create($request->all());
  	return redirect('/pkrplm')->with('sukses','Data berhasil diinputkan!');
  }
  public function edit($id)
  {
    $pkrplm = \App\Pkrplm::find($id);
    return view('pkrplm/edit', ['pkrplm' => $pkrplm]);
  }
   public function update(Request $request,$id)
    {
      $pkrplm = \App\Pkrplm::find($id);
      $pkrplm -> update ($request->all());
      return redirect('/pkrplm')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $pkrplm = \App\Pkrplm::find($id);
      $pkrplm-> delete();
       return redirect('/pkrplm')->with('sukses','Data berhasil dihapus!');
    }


    //  public function export() 
    // {
    //     return Excel::download (new PkrplmExport, 'laporanproker.xlsx');
    // }

    public function exportPdf()
    {
      $pkrplm = Pkrplm::all();
 
      $pdf = PDF::loadview('pkrplm.index_pdf',['pkrplm'=>$pkrplm]);
      return $pdf->download('laporan-pkrplm-pdf');
    }


}

