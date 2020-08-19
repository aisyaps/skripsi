<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Haki;
use App\Exports\hakiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HakiExportTW;
use PDF;
use DB;

class HakiController extends Controller
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
    \App\Haki::create($request->all());
    return redirect('/kmrd/haki')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithk($id)
  {
    $haki = \App\Haki::find($id);
    return view('kmrd.edithk', ['haki' => $haki]);
  }
   public function update(Request $request,$id)
    {
      $haki = \App\Haki::find($id);
      $haki -> update ($request->all());
      return redirect('/kmrd/haki')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $haki = \App\Haki::find($id);
      $haki-> delete();
       return redirect('/kmrd/haki')->with('sukses','Data berhasil dihapus!');
    }  
  public function export()
  {
    return Excel::download(new hakiExport, 'laporan kontrak manajemen haki.xlsx');
  }

   public function exportPdf()
    {

      $haki = Haki::all();
 
      $pdf = PDF::loadview('kmrd.hakiexportpdf ',['haki'=> $haki]);
      return $pdf->download('haki.pdf');
    }
     public function exportPerTW($tw)
    {
        $haki = DB::table('haki')->select('judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','kelompokkeahlian','jenisciptaan', 'tgl','biayapendaftaran','status')->where('periode',$tw)->get();
        return Excel::download (new HakiExportTW ($haki), 'laporan kontrak manajemen HaKi.xlsx');
    }
}
