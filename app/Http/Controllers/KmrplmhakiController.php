<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmrplmhaki;
use App\Exports\kmrplmhakiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HakiRplmExportTW;
use PDF;
use DB;

class KmrplmhakiController extends Controller
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
    \App\Kmrplmhaki::create($request->all());
    return redirect('/kmrplm/kmrplmhaki')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithk($id)
  {
    $kmrplmhaki = \App\Kmrplmhaki::find($id);
    return view('kmrplm.edithk', ['kmrplmhaki' => $kmrplmhaki]);
  }
   public function update(Request $request,$id)
    {
      $kmrplmhaki = \App\Kmrplmhaki::find($id);
      $kmrplmhaki -> update ($request->all());
      return redirect('/kmrplm/kmrplmhaki')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmrplmhaki = \App\Kmrplmhaki::find($id);
      $kmrplmhaki-> delete();
       return redirect('/kmrplm/kmrplmhaki')->with('sukses','Data berhasil dihapus!');
    }

    public function export()
  {
    return Excel::download(new kmrplmhakiExport, 'laporan kontrak manajemen haki.xlsx');
  }

  public function exportPdf()
    {

      $kmrplmhaki = Kmrplmhaki::all();
 
      $pdf = PDF::loadview('kmrplm.hakiexportpdf ',['kmrplmhaki'=> $kmrplmhaki]);
      return $pdf->download('kmrplmhaki.pdf');
    }
    public function exportPerTW($tw)
    {
        $kmrplmhaki = DB::table('kmrplmhaki')->select('judulhaki','periode','pemeganghakcipta','pencipta','pencipta2','pencipta3','pencipta4','pencipta5','pencipta6','pencipta7','kelompokkeahlian','jenisciptaan', 'tgl','biayapendaftaran','status')->where('periode',$tw)->get();
        return Excel::download (new HakiRplmExportTW ($kmrplmhaki), 'laporan kontrak manajemen HaKi.xlsx');
    }
}
