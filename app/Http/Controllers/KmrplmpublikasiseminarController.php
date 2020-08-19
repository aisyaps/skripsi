<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmrplmpublikasiseminar;
use App\Exports\kmrplmpublikasiseminarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PublikasiRplmExportTW;
use PDF;
use DB;
class KmrplmpublikasiseminarController extends Controller
{
     public function create(Request $request)
  { 
     $this->validate($request,[
      'judulpenelitian' => 'required',
      'penulis1'       =>'required',
      'kategori' => 'required',
      'nama' => 'required',
      'publisherlokasi' => 'required',
      'status' => 'required',

  ]);

    \App\Kmrplmpublikasiseminar::create($request->all());
    return redirect('/kmrplm/kmrplmpublikasiseminar')->with('sukses','Data berhasil diinputkan!');
  }

   public function editps($id)
  {
    $kmrplmpublikasiseminar = \App\Kmrplmpublikasiseminar::find($id);
    return view('kmrplm.editps', ['kmrplmpublikasiseminar' => $kmrplmpublikasiseminar]);
  }
   public function update(Request $request,$id)
    {
      $kmrplmpublikasiseminar = \App\Kmrplmpublikasiseminar::find($id);
      $kmrplmpublikasiseminar -> update ($request->all());
      return redirect('/kmrplm/kmrplmpublikasiseminar')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmrplmpublikasiseminar = \App\Kmrplmpublikasiseminar::find($id);
      $kmrplmpublikasiseminar-> delete();
       return redirect('/kmrplm/kmrplmpublikasiseminar')->with('sukses','Data berhasil dihapus!');
    }

   public function export(){
    return Excel::download(new kmrplmpublikasiseminarExport, 'laporan kontrak manajemen rekognisi.xlsx');
    }

  public function exportPdf()
    {

      $kmrplmpublikasiseminar = Kmrplmpublikasiseminar::all();
 
      $pdf = PDF::loadview('kmrplm.publikasiseminarexportpdf ',['kmrplmpublikasiseminar'=> $kmrplmpublikasiseminar]);
      return $pdf->download('kmrplmpublikasiseminar.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmrplmpublikasiseminar = DB::table('kmrplmpublikasiseminar')->select('judulpenelitian','periode','penulis1','anggotapenulis2','anggotapenulis3','anggotapenulis4','anggotapenulis5','kategori', 'nama','publisherlokasi','volnojurnaltglsem','biayapublikasi','stimulus','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new PublikasiRplmExportTW ($kmrplmpublikasiseminar), 'Laporan kontrak manajemen publikasi seminar KK RPLM.xlsx');
    }

}
