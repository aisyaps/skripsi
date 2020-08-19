<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtksehk;
use App\Exports\kmtksehkExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HakiTkseExportTW;
use PDF;
use DB;
class KmtksehkController extends Controller
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
    \App\Kmtksehk::create($request->all());
    return redirect('/kmtkse/kmtksehk')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithk($id)
  {
    $kmtksehk = \App\Kmtksehk::find($id);
    return view('kmtkse.edithk', ['kmtksehk' => $kmtksehk]);
  }
   public function update(Request $request,$id)
    {
      $kmtksehk = \App\Kmtksehk::find($id);
      $kmtksehk -> update ($request->all());
      return redirect('/kmtkse/kmtksehk')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtksehk = \App\Kmtksehk::find($id);
      $kmtksehk-> delete();
       return redirect('/kmtkse/kmtksehk')->with('sukses','Data berhasil dihapus!');
    }
     public function export()
  {
    return Excel::download(new kmtksehkExport, 'laporan kontrak manajemen haki.xlsx');
  }

  public function exportPdf()
    {

      $kmtksehk = kmtksehk::all();
 
      $pdf = PDF::loadview('kmtkse.hakiexportpdf ',['kmtksehk'=> $kmtksehk]);
      return $pdf->download('kmtksehk.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtksehk = DB::table('kmtksehk')->select('judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','jenisciptaan', 'tgl','biayapendaftaran','status')->where('periode',$tw)->get();
        return Excel::download (new HakiTkseExportTW ($kmtksehk), 'laporan kontrak manajemen HaKi KK TKSE.xlsx');
    }
}
