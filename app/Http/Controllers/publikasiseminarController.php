<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publikasiseminar;
use App\Exports\publikasiseminarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PublikasiExportTW;
use PDF;
use DB;
class publikasiseminarController extends Controller
{
   public function create(Request $request)
  { 
      $this->validate($request,[
      'judulpenelitian' => 'required',
      'penulis1'       =>'required',
      'kategori' => 'required',
      'nama' => 'required',
      'publisherlokasi' => 'required',

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
    \App\Publikasiseminar::create($request->all());
    return redirect('/kmrd/publikasiseminar')->with('sukses','Data berhasil diinputkan!');
  }

   public function editps($id)
  {
    $publikasiseminar = \App\Publikasiseminar::find($id);
    return view('kmrd.editps', ['publikasiseminar' => $publikasiseminar]);
  }
   public function update(Request $request,$id)
    {
      $publikasiseminar = \App\Publikasiseminar::find($id);
      $publikasiseminar -> update ($request->all());
      return redirect('/kmrd/publikasiseminar')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $publikasiseminar = \App\Publikasiseminar::find($id);
      $publikasiseminar-> delete();
       return redirect('/kmrd/publikasiseminar')->with('sukses','Data berhasil dihapus!');
    }   

     public function export(){

      return Excel::download(new publikasiseminarExport, 'laporan kontrak manajemen publikasi seminar.xlsx');
    }

     public function exportPdf()
    {

      $publikasiseminar = Publikasiseminar::all();
 
      $pdf = PDF::loadview('kmrd.publikasiseminarexportpdf ',['publikasiseminar'=> $publikasiseminar]);
      return $pdf->download('publikasiseminar.pdf');
    }

     public function exportPerTW($tw)
    {
        $publikasiseminar = DB::table('publikasiseminar')->select('judulpenelitian','periode','penulis1','anggotapenulis2','anggotapenulis3','anggotapenulis4','anggotapenulis5','kelompokkeahlian','kategori', 'nama','publisherlokasi','volnojurnaltglsem','biayapublikasi','stimulus','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new PublikasiExportTW ($publikasiseminar), 'laporanproker.xlsx');
    }
}
