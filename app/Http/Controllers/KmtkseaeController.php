<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmtkseae;
use App\Exports\kmtkseaeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\AbdimasTkseExportTW;
use PDF;
use DB;
class KmtkseaeController extends Controller
{
     public function create(Request $request)
  {
    $this->validate($request,[
     'judulkegiatanpengmas' => 'required',
      'tempat'   => 'required',
      'biaya'       => 'required',
  
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
    \App\Kmtkseae::create($request->all());
    return redirect('/kmtkse/kmtkseae')->with('sukses','Data berhasil diinputkan!');
  }

   public function editae($id)
  {
    $kmtkseae = \App\Kmtkseae::find($id);
    return view('kmtkse.editae', ['kmtkseae' => $kmtkseae]);
  }
   public function update(Request $request,$id)
    {
      $kmtkseae = \App\Kmtkseae::find($id);
      $kmtkseae -> update ($request->all());
      return redirect('/kmtkse/kmtkseae')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmtkseae = \App\Kmtkseae::find($id);
      $kmtkseae-> delete();
       return redirect('/kmtkse/kmtkseae')->with('sukses','Data berhasil dihapus!');
    }

    public function export(){
    return Excel::download(new kmtkseaeExport, 'laporan kontrak manajemen abdimaseksernal.xlsx');
     }

    public function exportPdf()
    {

      $kmtkseae = Kmtkseae::all();
 
      $pdf = PDF::loadview('kmtkse.abdimaseksternalexportpdf ',['kmtkseae'=> $kmtkseae]);
      return $pdf->download('abdimaseksternal.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmtkseae = DB::table('kmtkseae')->select('judulkegiatanpengmas','periode','namadosen1', 'namadosen2','namadosen3','namadosen4','namadosen5','namamahasiswa1','namamahasiswa2','namamahasiswa3','namamahasiswa4','namamahasiswa5','tgl','tempat', 'prodidosen','prodidosen2','prodidosen3','prodidosen4','prodidosen5','kategori','biaya','status')->where('periode',$tw)->get();
        return Excel::download (new AbdimasTkseExportTW ($kmtkseae), 'laporan kontrak manajemen abdimas eksternal KK TKSE.xlsx');
    }
}
