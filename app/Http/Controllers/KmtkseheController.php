<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtksehe;
use App\Exports\kmtkseheExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HibahTkseExportTW;
use PDF;
use DB;

class KmtkseheController extends Controller
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
    \App\Kmtksehe::create($request->all());
    return redirect('/kmtkse/kmtksehe')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithe($id)
  {
    $kmtksehe = \App\Kmtksehe::find($id);
    return view('kmtkse.edithe', ['kmtksehe' => $kmtksehe]);
  }
   public function update(Request $request,$id)
    {
      $kmtksehe = \App\Kmtksehe::find($id);
      $kmtksehe -> update ($request->all());
      return redirect('/kmtkse/kmtksehe')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtksehe = \App\Kmtksehe::find($id);
      $kmtksehe-> delete();
       return redirect('/kmtkse/kmtksehe')->with('sukses','Data berhasil dihapus!');
    }
     public function export(){

      return Excel::download(new kmtkseheExport, 'laporan kontrak manajemen hibah eksternal.xlsx');
    }

     public function exportPdf()
    {

      $kmtksehe = Kmtksehe::all();
 
      $pdf = PDF::loadview('kmtkse.hibaheksternalexportpdf ',['kmtksehe'=> $kmtksehe]);
      return $pdf->download('kmtksehe.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtksehe = DB::table('kmtksehe')->select('judulpenelitian','periode','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new HibahTkseExportTW ($kmtksehe), 'laporan kontrak manajemen hibah eksternal KK TKSE.xlsx');
    }
}
