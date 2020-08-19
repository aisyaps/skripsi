<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hibaheksternal;
use App\Exports\hibaheksternalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\HibahExportTW;
use DB;

class HibaheksternalController extends Controller
{
    
   public function create(Request $request)
  { 
    $this->validate($request,[
      'judulpenelitian' => 'required',
      'peneliti1'       =>'required',
      'dana_disetujui'  => 'required|numeric',
    ]);
      
    \App\Hibaheksternal::create($request->all());
    return redirect('/kmrd/hibaheksternal')->with('sukses','Data berhasil diinputkan!');
  }

   public function edithe($id)
  {
    $hibaheksternal = \App\Hibaheksternal::find($id);
    return view('kmrd.edithe', ['hibaheksternal' => $hibaheksternal]);
  }
   public function update(Request $request,$id)
    {
      $hibaheksternal = \App\Hibaheksternal::find($id);
      $hibaheksternal -> update ($request->all());
      return redirect('/kmrd/hibaheksternal')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $hibaheksternal = \App\Hibaheksternal::find($id);
      $hibaheksternal-> delete();
       return redirect('kmrd/hibaheksternal')->with('sukses','Data berhasil dihapus!');
    }
     public function export(){

      return Excel::download(new hibaheksternalExport, 'laporan kontrak manajemen hibah eksternal.xlsx');
    }

    public function exportPerTW($tw)
    {
        $hibaheksternal = DB::table('hibaheksternal')->select('judulpenelitian','periode','peneliti1','anggotapeneliti2','anggotapeneliti3','anggotapeneliti4','dana_diajukan','dana_disetujui', 'kategori','keterangan','status')->where('periode',$tw)->get();
        return Excel::download (new HibahExportTW ($hibaheksternal), 'Laporan kontrak manajemen KK RD.xlsx');
    }
}
