<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontrakmanajemenController extends Controller
{
	public function index(){

    return view('kontrakmanajemen.index');

	}
   public function kontrakmanajemen(Request $request){

      $data_kontrakmanajemen = \App\Kontrakmanajemen::all();
   		return view('kontrakmanajemen.kontrakmanajemen', ['data_kontrakmanajemen' => $data_kontrakmanajemen]);
   }

    public function create(Request $request)
  {	
     //$prokerkk->{id}->programkerja = \App\Programkerja::find($id);
    //return view('/prokerkk/{id}/programkerja/create', ['data_programkerja' => $data_programkerja]);
       //insert ke table user
    //$user = new \App\User;
    //$user->role = 'kmjurnal';
    //$user->name = $request->nama_dosen;
    //$user->email = $request->email;
    //$user->password = bcrypt ('1');
    //$user->remember_token = str_random(60);
    //$user->save();

     //insert ke table kmjurnal
    //$request->request->add(['user_id' => $user->id]);
   // \App\Programkerja::create($request->all());
    return //redirect('/prokerkk/{id}/programkerja')->with('sukses','Data berhasil diinputkan!');
  }
  public function edit($id)
  {
    $programkerja = \App\Programkerja::find($id);
    return view('/prokerkk/{id}/programkerja/edit', ['programkerja' => $programkerja]);
  }
   public function update(Request $request,$id)
    {
      $programkerja = \App\Programkerja::find($id);
      $programkerja -> update ($request->all());
      return redirect('/prokerkk/{id}/programkerja')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $programkerja = \App\Programkerja::find($id);
      $programkerja-> delete();
       return redirect('/prokerkk/{id}/programkerja')->with('sukses','Data berhasil dihapus!');
    }
    public function programkerja($id)
    {
    	$programkerja = \App\Programkerja::find($id);
    	 return view('/prokerkk/{id}/programkerja.programkerja', ['programkerja' => $programkerja]);

    }
}



}
