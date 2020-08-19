<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtihe;
use App\Exports\kmtiheExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HibahTiExportTW;
use PDF;
use DB;


class KmtiheController extends Controller
{
     public function create(Request $request)
  { 

   $this->validate($request,[
      'judulpenelitian' => 'required',
      'peneliti1'       =>'required',
      'dana_disetujui'  => 'required|numeric',
      'status'          => 'required',
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
    \App\kmtihe::create($request->all());
    return redirect('/kmti/kmtihe')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithe($id)
  {
    $kmtihe = \App\Kmtihe::find($id);
    return view('kmti.edithe', ['kmtihe' => $kmtihe]);
  }
   public function update(Request $request,$id)
    {
      $kmtihe = \App\Kmtihe::find($id);
      $kmtihe -> update ($request->all());
      return redirect('/kmti/kmtihe')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtihe = \App\Kmtihe::find($id);
      $kmtihe-> delete();
       return redirect('/kmti/kmtihe')->with('sukses','Data berhasil dihapus!');
    }
    public function export(){

      return Excel::download(new kmtiheExport, 'laporan kontrak manajemen hibah eksternal.xlsx');
    }

     public function exportPdf()
    {

      $kmtihe = Kmtihe::all();
 
      $pdf = PDF::loadview('kmrd.hibaheksternalexportpdf ',['kmtihe'=> $kmtihe]);
      return $pdf->download('kmtihe.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtihe = DB::table('kmtihe')->select('judulpenelitian','periode','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new HibahTiExportTW ($kmtihe), 'laporanproker.xlsx');
    }
}
