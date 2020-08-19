<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abdimaseksternal;
use App\Exports\abdimaseksternalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\AbdimasExportTW;
use PDF;
use DB;


class AbdimaseksternalController extends Controller
{
     public function create(Request $request)
  { 
    $this->validate($request,[
     'judulkegiatanpengmas' => 'required',
     'namadosen1'=>'required',
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
    \App\Abdimaseksternal::create($request->all());
    return redirect('/kmrd/abdimaseksternal')->with('sukses','Data berhasil diinputkan!');
  }

   public function editae($id)
  {
    $abdimaseksternal = \App\Abdimaseksternal::find($id);
    return view('kmrd.editae', ['abdimaseksternal' => $abdimaseksternal]);
  }
   public function update(Request $request,$id)
    {
      $abdimaseksternal = \App\Abdimaseksternal::find($id);
      $abdimaseksternal -> update ($request->all());
      return redirect('/kmrd/abdimaseksternal')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $abdimaseksternal = \App\Abdimaseksternal::find($id);
      $abdimaseksternal-> delete();
       return redirect('/kmrd/abdimaseksternal')->with('sukses','Data berhasil dihapus!');
    }

    public function export()
  {
    return Excel::download(new abdimaseksternalExport, 'laporan kontrak manajemen abdimaseksternal.xlsx');
  }

  public function exportPdf()
    {

      $abdimaseksternal = Abdimaseksternal::all();
 
      $pdf = PDF::loadview('kmrd.abdimaseksternalexportpdf ',['abdimaseksternal'=> $abdimaseksternal]);
      return $pdf->download('abdimaseksternal.pdf');
    }
     public function exportPerTW($tw)
    {
        $abdimaseksternal = DB::table('abdimaseksternal')->select('judulkegiatanpengmas','periode','namadosen1', 'namadosen2','namadosen3','namadosen4','namadosen5','namamahasiswa1','namamahasiswa2','namamahasiswa3','namamahasiswa4','namamahasiswa5','kelompokkeahlian','tgl','tempat', 'prodidosen','prodidosen2','prodidosen3','prodidosen4','prodidosen5','kategori','biaya','status')->where('periode',$tw)->get();
        return Excel::download (new AbdimasExportTW ($abdimaseksternal), 'laporan kontrak manajemen abdimas eksternal.xlsx');
    }
}
