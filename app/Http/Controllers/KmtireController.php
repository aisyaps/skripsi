<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtire;
use App\Exports\kmtireExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\RekognisiTiExportTW;
use PDF;
use DB;

class KmtireController extends Controller
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
    \App\Kmtire::create($request->all());
    return redirect('kmti/kmtire')->with('sukses','Data berhasil diinputkan!');
  }

   public function editre($id)
  {
    $kmtire = \App\Kmtire::find($id);
    return view('/kmti/editre', ['kmtire' => $kmtire]);
  }
   public function update(Request $request,$id)
    {
      $kmtire = \App\Kmtire::find($id);
      $kmtire -> update ($request->all());
      return redirect('/kmti/kmtire')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtire = \App\Kmtire::find($id);
      $kmtire-> delete();
       return redirect('/kmti/kmtire')->with('sukses','Data berhasil dihapus!');
    }
  public function export(){

  return Excel::download(new kmtireExport, 'laporan kontrak manajemen rekognisi.xlsx');
    }

  public function exportPdf()
    {

      $kmtire = Kmtire::all();
 
      $pdf = PDF::loadview('kmti.rekognisiexportpdf ',['kmtire'=> $kmtire]);
      return $pdf->download('kmtire.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtire = DB::table('kmtire')->select('judulkegiatan','periode','namadosen','tgl1','tgl2','tempat', 'penyelenggara','prodidosen','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new RekognisiTiExportTW ($kmtire), 'laporan kontrak manajemen rekognisi KK TI.xlsx');
    }

}
