<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmrplmrekognisi;
use App\Exports\kmrplmrekognisiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\RekognisiRplmExportTW;
use PDF;
use DB;

class KmrplmrekognisiController extends Controller
{
    public function create(Request $request)
  { 
      $this->validate($request,[
      'judulkegiatan' => 'required',
      'namadosen'       =>'required',
      'tgl1' => 'required|date',
      'tgl2'   => 'required|date',
      'penyelenggara'   => 'required',
      'prodidosen'       => 'required',
      'status'     => 'required',
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
    \App\Kmrplmrekognisi::create($request->all());
    return redirect('/kmrplm/kmrplmrekognisi')->with('sukses','Data berhasil diinputkan!');
  }

   public function editre($id)
  {
    $kmrplmrekognisi = \App\Kmrplmrekognisi::find($id);
    return view('kmrplm.editre', ['kmrplmrekognisi' => $kmrplmrekognisi]);
  }
   public function update(Request $request,$id)
    {
      $kmrplmrekognisi = \App\Kmrplmrekognisi::find($id);
      $kmrplmrekognisi -> update ($request->all());
      return redirect('/kmrplm/kmrplmrekognisi')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmrplmrekognisi = \App\Kmrplmrekognisi::find($id);
      $kmrplmrekognisi-> delete();
       return redirect('/kmrplm/kmrplmrekognisi')->with('sukses','Data berhasil dihapus!');
    }
    public function export()
  {
    return Excel::download(new kmrplmrekognisiExport, 'laporan kontrak manajemen abdimas eksternal.xlsx');
  }

  public function exportPdf()
    {

      $kmrplmrekognisi = Kmrplmrekognisi::all();
 
      $pdf = PDF::loadview('kmrplm.rekognisiexportpdf ',['kmrplmrekognisi'=> $kmrplmrekognisi]);
      return $pdf->download('kmrplmrekognisi.pdf');
    }
      public function exportPerTW($tw)
    {
        $kmrplmrekognisi = DB::table('kmrplmrekognisi')->select('judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new RekognisiRplmExportTW ($kmrplmrekognisi), 'laporan kontrak manajemen rekognisi KK RPLM.xlsx');
    }
}
