<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtksere;
use App\Exports\kmtksereExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\RekognisiTkseExportTW;
use PDF;
use DB;

class KmtksereController extends Controller
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
    \App\Kmtksere::create($request->all());
    return redirect('/kmtkse/kmtksere')->with('sukses','Data berhasil diinputkan!');
  }

   public function editre($id)
  {
    $kmtksere = \App\Kmtksere::find($id);
    return view('kmtkse.editre', ['kmtksere' => $kmtksere]);
  }
   public function update(Request $request,$id)
    {
      $kmtksere = \App\Kmtksere::find($id);
      $kmtksere -> update ($request->all());
      return redirect('/kmtkse/kmtksere')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtksere = \App\Kmtksere::find($id);
      $kmtksere-> delete();
       return redirect('/kmtkse/kmtksere')->with('sukses','Data berhasil dihapus!');
    }
     public function export(){
    return Excel::download(new kmtksereExport, 'laporan kontrak manajemen rekognisi.xlsx');
    }

  public function exportPdf()
    {

      $kmtksere = Kmtksere::all();
 
      $pdf = PDF::loadview('kmtkse.rekognisiexportpdf ',['kmtksere'=> $kmtksere]);
      return $pdf->download('kmtksere.pdf');
    }
    public function exportPerTW($tw)
    {
        $kmtksere = DB::table('kmtksere')->select('judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new RekognisiTkseExportTW ($kmtksere), 'laporan kontrak manajemen rekognisi KK TKSE .xlsx');
    }
}
