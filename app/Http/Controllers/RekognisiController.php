<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekognisi;
use App\Exports\rekognisiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\RekognisiExportTW;
use PDF;
use DB;

class RekognisiController extends Controller
{
     public function create(Request $request){
      $this->validate($request,[
      'judulkegiatan' => 'required',
      'namadosen'       =>'required',
      'tgl1' => 'required|date',
      'tgl2'   => 'required|date',
      'penyelenggara'   => 'required',
      'prodidosen'       => 'required',
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
    \App\Rekognisi::create($request->all());
    return redirect('/kmrd/rekognisi')->with('sukses','Data berhasil diinputkan!');
  }

   public function editre($id)
  {
    $rekognisi = \App\Rekognisi::find($id);
    return view('kmrd.editre', ['rekognisi' => $rekognisi]);
  }
   public function update(Request $request,$id)
    {
      $rekognisi = \App\Rekognisi::find($id);
      $rekognisi -> update ($request->all());
      return redirect('/kmrd/rekognisi')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $rekognisi = \App\Rekognisi::find($id);
      $rekognisi-> delete();
       return redirect('/kmrd/rekognisi')->with('sukses','Data berhasil dihapus!');
    }  
    public function export()
  {
    return Excel::download(new rekognisiExport, 'laporan kontrak manajemen abdimas eksternal.xlsx');
  }

  public function exportPdf()
    {

      $rekognisi = Rekognisi::all();
 
      $pdf = PDF::loadview('kmrd.rekognisiexportpdf ',['rekognisi'=> $rekognisi]);
      return $pdf->download('rekognisi.pdf');
    }
     public function exportPerTW($tw)
    {
        $rekognisi = DB::table('rekognisi')->select('judulkegiatan','periode','namadosen','kelompokkeahlian','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new RekognisiExportTW ($rekognisi), 'laporan kontrak manajemen rekognisi.xlsx');
    }
}
