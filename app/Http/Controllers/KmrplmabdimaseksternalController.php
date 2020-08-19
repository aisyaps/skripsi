<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmrplmabdimaseksternal;
use App\Exports\kmrplmabdimaseksternalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\AbdimasRplmExportTW;
use PDF;
use DB;

class KmrplmabdimaseksternalController extends Controller
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
    \App\Kmrplmabdimaseksternal::create($request->all());
    return redirect('/kmrplm/kmrplmabdimaseksternal')->with('sukses','Data berhasil diinputkan!');
  }

   public function editae($id)
  {
    $kmrplmabdimaseksternal = \App\Kmrplmabdimaseksternal::find($id);
    return view('kmrplm.editae', ['kmrplmabdimaseksternal' => $kmrplmabdimaseksternal]);
  }
   public function update(Request $request,$id)
    {
      $kmrplmabdimaseksternal = \App\Kmrplmabdimaseksternal::find($id);
      $kmrplmabdimaseksternal -> update ($request->all());
      return redirect('/kmrplm/kmrplmabdimaseksternal')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $kmrplmabdimaseksternal = \App\Kmrplmabdimaseksternal::find($id);
      $kmrplmabdimaseksternal-> delete();
       return redirect('/kmrplm/kmrplmabdimaseksternal')->with('sukses','Data berhasil dihapus!');
    }

     public function export()
  {
    return Excel::download(new kmrplmabdimaseksternalExport, 'laporan kontrak manajemen abdimaseksternal.xlsx');
  }

  public function exportPdf()
    {

      $kmrplmabdimaseksternal = Kmrplmabdimaseksternal::all();
 
      $pdf = PDF::loadview('kmrplm.abdimaseksternalexportpdf ',['kmrplmabdimaseksternal'=> $kmrplmabdimaseksternal]);
      return $pdf->download('kmrplmabdimaseksternal.pdf');
    }
     public function exportPerTW($tw)
    {
        $kmrplmabdimaseksternal = DB::table('kmrplmabdimaseksternal')->select('judulkegiatanpengmas','periode','namadosen1', 'namadosen2','namadosen3','namadosen4','namadosen5','namamahasiswa1','namamahasiswa2','namamahasiswa3','namamahasiswa4','namamahasiswa5','tgl','tempat', 'prodidosen','prodidosen2','prodidosen3','prodidosen4','prodidosen5','kategori','biaya','status')->where('periode',$tw)->get();
        return Excel::download (new AbdimasRplmExportTW ($kmrplmabdimaseksternal), 'laporan kontrak manajemen abdimas eksternal.xlsx');
    }
}
