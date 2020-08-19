<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtiae;
use App\Exports\kmtiaeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\AbdimasTiExportTW;
use PDF;
use DB;
class KmtiaeController extends Controller
{
     public function create(Request $request)
  { 
     $this->validate($request,[
     'judulkegiatanpengmas' => 'required',
      'tempat'   => 'required',
      'biaya'       => 'required',

    ]);
       //insert ke table user
   // $user = new \App\User;
    //$user->role = 'kmjurnal';
    //$user->name = $request->nama_dosen;
    //$user->email = $request->email;
    //$user->password = bcrypt ('1');
    //$user->remember_token = str_random(60);
    //$user->save();

     //insert ke table kmjurnal
    //$request->request->add(['user_id' => $user->id]);

    //dd(($request->all()));
    \App\Kmtiae::create($request->all());
    return redirect('/kmti/kmtiae')->with('sukses','Data berhasil diinputkan!');
  }

   public function editae($id)
  {
    $kmtiae = \App\Kmtiae::find($id);
    return view('kmti.editae', ['kmtiae' => $kmtiae]);
  }
   public function update(Request $request,$id)
    {
      $kmtiae = \App\Kmtiae::find($id);
      $kmtiae -> update ($request->all());
      return redirect('/kmti/kmtiae')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtiae = \App\Kmtiae::find($id);
      $kmtiae-> delete();
       return redirect('/kmti/kmtiae')->with('sukses','Data berhasil dihapus!');
    }
    public function export()
  {
    return Excel::download(new kmtiaeExport, 'laporan kontrak manajemen abdimaseksernal.xlsx');
  }

  public function exportPdf()
    {

      $kmtiae = Kmtiae::all();
 
      $pdf = PDF::loadview('kmti.abdimaseksternalexportpdf ',['kmtiae'=> $kmtiae]);
      return $pdf->download('abdimaseksternale.pdf');
    }
      public function exportPerTW($tw)
    {
        $kmtiae = DB::table('kmtiae')->select('judulkegiatanpengmas','periode','namadosen1', 'namadosen2','namadosen3','namadosen4','namadosen5','namamahasiswa1','namamahasiswa2','namamahasiswa3','namamahasiswa4','namamahasiswa5','namamahasiswa6','tgl','tempat', 'prodidosen','prodidosen2','prodidosen3','prodidosen4','prodidosen5','kategori','biaya','status')->where('periode',$tw)->get();
        return Excel::download (new AbdimasTiExportTW ($kmtiae), 'laporan kontrak manajemen abdimas eksternal KK TI.xlsx');
    }
}
