<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Plottingdosenemail;
use Illuminate\Support\Facades\Mail;
use DB;

class PlottingdosenemailController extends Controller
{
   	public function email(){

   		$coba = DB::table('roles')
						->join('model_has_roles','roles.id','=','model_has_roles.role_id')
						->join('users','model_has_roles.model_id','=','users.id')
						->where('roles.name','=','rd')
						->orwhere('roles.name','=','rplm')
						->orwhere('roles.name','=','tkse')
						->orwhere('roles.name','=','ti')
						->get();
		
		foreach ($coba as $key) {
			Mail::to($key->email)->send(new Plottingdosenemail($key->name));
		}
		
 
		return redirect('plottingdosen')->with('data berhasil di upload dan email terkirim');
	}
		public function email2(){

   		$coba2 = DB::table('roles')
						->join('model_has_roles','roles.id','=','model_has_roles.role_id')
						->join('users','model_has_roles.model_id','=','users.id')
						->where('roles.name','=','programstudi')
						->get();
		// dd($coba2);
		
		foreach ($coba2 as $key) {
			Mail::to($key->email)->send(new Plottingdosenemail($key->name));
		}
		
 
		return redirect('plottingdosen')->with('data berhasil di upload dan email terkirim');
	}
}
