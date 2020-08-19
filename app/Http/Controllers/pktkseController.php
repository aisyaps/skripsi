<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pktkse;
use App\Exports\PktkseExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class pktkseController extends Controller
{
     public function index(Request $request){

        $data_pktkse = \App\Pktkse::all();
   		return view('pktkse.index', ['data_pktkse' => $data_pktkse]);
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
    \App\Pktkse::create($request->all());
    


  	return redirect('/pktkse')->with('sukses','Data berhasil diinputkan!');
  }
  public function edit($id)
  {
    $pktkse = \App\Pktkse::find($id);
    return view('pktkse/edit', ['pktkse' => $pktkse]);
  }
   public function update(Request $request,$id)
    {
      $pktkse = \App\Pktkse::find($id);
      $pktkse -> update ($request->all());
      return redirect('/pktkse')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $pktkse = \App\Pktkse::find($id);
      $pktkse-> delete();
       return redirect('/pktkse')->with('sukses','Data berhasil dihapus!');
    }

    public function export() 
    {
        return Excel::download (new PktkseExport, 'pktkse.xlsx');
    }

    public function exportPdf()
    {
      $pktkse = Pktkse::all();
 
      $pdf = PDF::loadview('pktkse.index_pdf',['pktkse'=>$pktkse]);
      return $pdf->download('laporan-pktkse-pdf');
    }
}
