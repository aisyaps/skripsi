<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
      public function index(Request $request){

        $daftar_topic = \App\Topic::all();//parameter, value model
   		return view('topic.index', ['daftar_topic' => $daftar_topic]);//lempar ke file view dg associative array data topic agar masuk ke file view
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
    \App\Topic::create($request->all());
    


  	return redirect('/topic')->with('sukses','Data berhasil diinputkan!');
  }
  public function edit($id)
  {
    $daftar_topic = \App\Topic::find($id);
    return view('topic/edit', ['daftar_topic' => $daftar_topic]);
  }
   public function update(Request $request,$id)
    {
      $daftar_topic = \App\topic::find($id);
      $daftar_topic -> update ($request->all());
      return redirect('/topic')->with('sukses','Data berhasil diupdate!');
      }
   public function delete($id)
    {
      $daftar_topic = \App\Topic::find($id);
      $daftar_topic-> delete();
       return redirect('/topic')->with('sukses','Data berhasil dihapus!');
    }
}
