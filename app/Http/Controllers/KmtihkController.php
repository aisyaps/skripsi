<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtihk;
use App\Exports\kmtihkExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HakiTiExportTW;
use PDF;
use DB;

class KmtihkController extends Controller
{
    public function create(Request $request)
  { 

      $this->validate($request,[
      'judulhaki' => 'required',
      'pemeganghakcipta'  =>'required',
      'jenisciptaan' => 'required',
      'status' => 'required',
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
    \App\Kmtihk::create($request->all());
    return redirect('/kmti/kmtihk')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithk($id)
  {
    $kmtihk = \App\Kmtihk::find($id);
    return view('kmti.edithk', ['kmtihk' => $kmtihk]);
  }
   public function update(Request $request,$id)
    {
      $kmtihk = \App\Kmtihk::find($id);
      $kmtihk -> update ($request->all());
      return redirect('/kmti/kmtihk')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtihk = \App\Kmtihk::find($id);
      $kmtihk-> delete();
       return redirect('/kmti/kmtihk')->with('sukses','Data berhasil dihapus!');
    }

     public function export()
  {
    return Excel::download(new kmtihkExport, 'laporan kontrak manajemen haki.xlsx');
  }

  public function exportPdf()
    {

      $kmtihk = Kmtihk::all();
 
      $pdf = PDF::loadview('kmti.hakiexportpdf ',['kmtihk'=> $kmtihk]);
      return $pdf->download('kmtihk.pdf');
    }
       public function exportPerTW($tw)
    {
        $kmtihk = DB::table('kmtihk')->select('judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','jenisciptaan', 'tgl','biayapendaftaran','status')->where('periode',$tw)->get();
        return Excel::download (new HakiTiExportTW ($kmtihk), 'laporan kontrak manajemen HaKi KK TI.xlsx');
    }
}
