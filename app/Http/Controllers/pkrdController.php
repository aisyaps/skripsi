<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkrd;
use App\Exports\pkrdExport;
use Maatwebsite\Excel\Facades\Excel;
// use PDF;
// use DataTables;

class pkrdController extends Controller
{
   public function index(Request $request){

        $data_pkrd = \App\Pkrd::all();//parameter, value model
   		return view('pkrd.index', ['data_pkrd' => $data_pkrd]);//lempar ke file view dg associative array data pkrd agar masuk ke file view
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
    \App\Pkrd::create($request->all());
    


  	return redirect('/pkrd')->with('sukses','Data berhasil diinputkan!');
  }
  public function edit($id)
  {
    $pkrd = \App\Pkrd::find($id);
    return view('pkrd/edit', ['pkrd' => $pkrd]);
  }
   public function update(Request $request,$id)
    {
      $pkrd = \App\Pkrd::find($id);
      $pkrd -> update ($request->all());
      return redirect('/pkrd')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $pkrd = \App\Pkrd::find($id);
      $pkrd-> delete();
       return redirect('/pkrd')->with('sukses','Data berhasil dihapus!');
    }

};
