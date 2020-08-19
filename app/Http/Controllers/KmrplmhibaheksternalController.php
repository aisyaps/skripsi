<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmrplmhibaheksternal;
use App\Exports\kmrplmhibaheksternalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HibahRplmExportTW;
use PDF;
use DB;

class kmrplmhibaheksternalController extends Controller
{
     public function create(Request $request)
  { 

   $this->validate($request,[
      'judulpenelitian' => 'required',
      'peneliti1'       =>'required',
      'dana_disetujui'  => 'required|numeric',
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
    \App\Kmrplmhibaheksternal::create($request->all());
    return redirect('/kmrplm/kmrplmhibaheksternal')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithe($id)
  {
    $kmrplmhibaheksternal = \App\kmrplmhibaheksternal::find($id);
    return view('kmrplm.edithe', ['kmrplmhibaheksternal' => $kmrplmhibaheksternal]);
  }
   public function update(Request $request,$id)
    {
      $kmrplmhibaheksternal = \App\kmrplmhibaheksternal::find($id);
      $kmrplmhibaheksternal -> update ($request->all());
      return redirect('/kmrplm/kmrplmhibaheksternal')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmrplmhibaheksternal = \App\kmrplmhibaheksternal::find($id);
      $kmrplmhibaheksternal-> delete();
       return redirect('/kmrplm/kmrplmhibaheksternal')->with('sukses','Data berhasil dihapus!');
    }
 public function export(){

      return Excel::download(new kmrplmhibaheksternalExport, 'laporan kontrak manajemen hibah eksternal.xlsx');
    }

     public function exportPdf()
    {

      $kmrplmhibaheksternal = Kmrplmhibaheksternal::all();
 
      $pdf = PDF::loadview('kmrplm.hibaheksternalexportpdf ',['kmrplmhibaheksternal'=> $kmrplmhibaheksternal]);
      return $pdf->download('kmrplmhibaheksternal.pdf');
    }
       public function exportPerTW($tw)
    {
        $kmrplmhibaheksternal = DB::table('kmrplmhibaheksternal')->select('judulpenelitian','periode','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new HibahRplmExportTW ($kmrplmhibaheksternal), 'laporan kontrak manajemen hibah eksternal KK RPLM.xlsx');
    }
}
