<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkti;
use App\Exports\PktiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class pktiController extends Controller
{
     public function index(Request $request){

      $data_pkti = \App\Pkti::all();
   		return view('pkti.index', ['data_pkti' => $data_pkti]);
   }

    public function create(Request $request)
  {	
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
    \App\Pkti::create($request->all());
    


  	return redirect('/pkti')->with('sukses','Data berhasil diinputkan!');
    }
  public function edit($id)
    {
    $pkti = \App\Pkti::find($id);
    return view('pkti/edit', ['pkti' => $pkti]);
    }
   public function update(Request $request,$id)
      {

      $pkti = \App\Pkti::find($id);
      $pkti -> update ($request->all());
      return redirect('/pkti')->with('sukses','Data berhasil diupdate!');
      
      }
   public function delete($id)
    {
      $pkti = \App\Pkti::find($id);
      $pkti-> delete();
       return redirect('/pkti')->with('sukses','Data berhasil dihapus!');
    }

    public function export() 
    {
        return Excel::download (new PktiExport, 'pkti.xlsx');
    }

    public function exportPdf()
    {
      $pkti = Pkti::all();
 
      $pdf = PDF::loadview('pkti.index_pdf',['pkti'=>$pkti]);
      return $pdf->download('laporan-pkti-pdf');
    }
}
