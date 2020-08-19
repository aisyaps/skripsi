<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtips;
use App\Exports\kmtipsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PublikasiTiExportTW;
use PDF;
use DB;

class KmtipsController extends Controller
{
     public function create(Request $request)
  { 

      $this->validate($request,[
      'judulpenelitian' => 'required',
      'penulis1'       =>'required',
      'kategori' => 'required',
      // 'nama' => 'required',
      // 'publisherlokasi' => 'required',
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
    \App\Kmtips::create($request->all());
    return redirect('/kmti/kmtips')->with('sukses','Data berhasil diinputkan!');
  }

   public function editps($id)
  {
    $kmtips = \App\Kmtips::find($id);
    return view('kmti.editps', ['kmtips' => $kmtips]);
  }
   public function update(Request $request,$id)
    {
      $kmtips = \App\Kmtips::find($id);
      $kmtips -> update ($request->all());
      return redirect('/kmti/kmtips')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtips = \App\Kmtips::find($id);
      $kmtips-> delete();
       return redirect('/kmti/kmtips')->with('sukses','Data berhasil dihapus!');
    }
     public function export(){

      return Excel::download(new kmtipsExport, 'laporan kontrak manajemen publikasi seminar.xlsx');
    }

     public function exportPdf()
    {

      $kmtips = Kmtips::all();
 
      $pdf = PDF::loadview('kmti.publikasiseminarexportpdf ',['kmtips'=> $kmtips]);
      return $pdf->download('kmtips.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtips = DB::table('kmtips')->select('judulpenelitian','periode','penulis1','anggotapenulis2','anggotapenulis3','anggotapenulis4','anggotapenulis5','kategori', 'nama','publisherlokasi','volnojurnaltglsem','biayapublikasi','stimulus','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new PublikasiTiExportTW ($kmtips), 'laporan kontrak manajemen publikasi seminar KK TI.xlsx');
    }
}
