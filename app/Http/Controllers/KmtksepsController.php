<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtkseps;
use App\Exports\kmtksepsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PublikasiTkseExportTW;
use PDF;
use DB;
class KmtksepsController extends Controller
{
     public function create(Request $request)
  { 

      $this->validate($request,[
      'judulpenelitian' => 'required',
      'penulis1'       =>'required',
      'kategori' => 'required',
      // 'nama' => 'required',
      // 'publisherlokasi' => 'required',
      // 'biayapublikasi' => 'required',
      // 'status' => 'required',

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
    \App\Kmtkseps::create($request->all());
    return redirect('/kmtkse/kmtkseps')->with('sukses','Data berhasil diinputkan!');
  }

   public function editps($id)
  {
    $kmtkseps = \App\Kmtkseps::find($id);
    return view('kmtkse.editps', ['kmtkseps' => $kmtkseps]);
  }
   public function update(Request $request,$id)
    {
      $kmtkseps = \App\Kmtkseps::find($id);
      $kmtkseps -> update ($request->all());
      return redirect('/kmtkse/kmtkseps')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtkseps = \App\Kmtkseps::find($id);
      $kmtkseps-> delete();
       return redirect('/kmtkse/kmtkseps')->with('sukses','Data berhasil dihapus!');
    }
     public function export(){

      return Excel::download(new kmtksepsExport, 'laporan kontrak manajemen publikasi seminar.xlsx');
    }

     public function exportPdf()
    {

      $kmtkseps = Kmtkseps::all();
 
      $pdf = PDF::loadview('kmtkse.publikasiseminarexportpdf ',['kmtkseps'=> $kmtkseps]);
      return $pdf->download('kmtkseps.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtkseps = DB::table('kmtkseps')->select('judulpenelitian','periode','penulis1','anggotapenulis2','anggotapenulis3','anggotapenulis4','anggotapenulis5','kategori', 'nama','publisherlokasi','volnojurnaltglsem','biayapublikasi','stimulus','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new PublikasiTkseExportTW ($kmtkseps), 'Laporan kontrak manajemen publikasi seminar KK TKSE.xlsx');
    }
}
