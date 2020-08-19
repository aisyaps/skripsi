<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Topic;


class profilController extends Controller
{
    public function indexRd()
    {
   	 $data_rd = \App\Profil::where('jeniskk','rd' )->get();//parameter, value model
   	  $daftar_topic=Topic::pluck('namatopic','id');
   		
	 return view('rd.index',['data_rd' => $data_rd ,'daftar_topic'=> $daftar_topic]);
	}

	public function createRd(Request $request)
	  {	
	  		// echo ('masuk rplm harusnya');
	  		// die();
	  	 $this->validate($request,[
	      'namadosen'=> 'required',
	      'nidn'   =>'required',
	      'prodi'  => 'required',
	       'id_topic'=>'required',
	 
	 
	    ]);

	  	  $topic=implode(",", $request->id_topic);

	  	 $namadosen=$request->namadosen;
	  	 $nidn=$request->nidn;
	  	 $prodi=$request->prodi;
	  	  $id_topic=$request->id_topic;
	  	


	  	 \DB::table('profil')->insert([
	  	  'namadosen'=>$namadosen,
	  	  'nidn'=>$nidn,
	  	  'prodi'=>$prodi,
	  	  'jeniskk'=>'rd',
	  	    'id_topic'=>$topic

	  	 ]);
	     
	  	return redirect('/rd')->with('sukses','Data berhasil diinputkan!');
	  }
	   public function editRd($id)
	  {
	    $rd = \App\Profil::find($id);
	     $daftar_topic=Topic::pluck('namatopic','id');
	    return view('rd/edit', ['rd' => $rd,'daftar_topic'=> $daftar_topic]);
	  }
	   public function updateRd(Request $request,$id)
	    {
	      $rd = \App\Profil::find($id);
	      $rd -> update ($request->all());
	      return redirect('/rd')->with('sukses','Data berhasil diupdate!');
	      }
	   public function deleteRd($id)
	    {
	      $rd = \App\Profil::find($id);
	      $rd-> delete();
	       return redirect('/rd')->with('sukses','Data berhasil dihapus!');
	    }
//kkrplm
	 public function indexRplm()
    {
   	 $data_rplm = \App\Profil::where('jeniskk','rplm' )->get();//parameter, value model
   	 $daftar_topic=Topic::pluck('namatopic','id');
   		
	 return view('rplm.index_rplm',['data_rplm' => $data_rplm,'daftar_topic'=> $daftar_topic]);
	}

	public function createRplmTes1(Request $request)
	  {	
	  		
	  	 $this->validate($request,[
	      'namadosen'=> 'required',
	      'nidn'   =>'required',
	      'prodi'  => 'required',
	       'id_topic'=>'required',
	 
	    ]);

	  	  $topic=implode(",", $request->id_topic);

	  	 $namadosen=$request->namadosen;
	  	 $nidn=$request->nidn;
	  	 $prodi=$request->prodi;
	  	 $id_topic=$request->id_topic;
	  	


	  	 \DB::table('profil')->insert([
	  	  'namadosen'=>$namadosen,
	  	  'nidn'=>$nidn,
	  	  'prodi'=>$prodi,
	  	  'jeniskk'=>'rplm',
	  	  'id_topic'=>$topic

	  	 ]);
	     
	  	return redirect('/rplm')->with('sukses','Data berhasil diinputkan!');
	  }
	   public function editRplm($id)
	  {
	    $rplm = \App\Profil::find($id);
	     $daftar_topic=Topic::pluck('namatopic','id');
	    return view('rplm/edit', ['rplm' => $rplm,'daftar_topic'=> $daftar_topic]);
	  }
	   public function updateRplm(Request $request,$id)
	    {
	      $rplm = \App\Profil::find($id);
	      $rplm -> update ($request->all());
	      return redirect('/rplm')->with('sukses','Data berhasil diupdate!');
	      }
	   public function deleteRplm($id)
	    {
	      $rplm = \App\Profil::find($id);
	      $rplm-> delete();
	       return redirect('/rplm')->with('sukses','Data berhasil dihapus!');
	    }

//kktkse

	    public function indexTkse()
    {
   	 $data_tkse = \App\Profil::where('jeniskk','tkse' )->get();//parameter, value model

   	 $daftar_topic=Topic::pluck('namatopic','id');
   		
	 return view('tkse.index_tkse',['data_tkse'=> $data_tkse,'daftar_topic'=> $daftar_topic]);
	}

	public function createTkse(Request $request)
	  {	
	  		
	  	 $this->validate($request,[
	      'namadosen'=> 'required',
	      'nidn'   =>'required',
	      'prodi'  => 'required',
	      'id_topic'=>'required',

	    ]);

	  	 $topic=implode(",", $request->id_topic);
	  	 // dd($topic);

	  	 $namadosen=$request->namadosen;
	  	 $nidn=$request->nidn;
	  	 $prodi=$request->prodi;
	  	 $id_topic=$request->id_topic;

	  	 \DB::table('profil')->insert([
	  	  'namadosen'=>$namadosen,
	  	  'nidn'=>$nidn,
	  	  'prodi'=>$prodi,
	  	  'jeniskk'=>'tkse',
	  	  'id_topic'=>$topic

	  	 ]);
	     
	  	return redirect('/tkse')->with('sukses','Data berhasil diinputkan!');
	  }
	   public function editTkse($id)
	  {
	    $tkse = \App\Profil::find($id);

	    $daftar_topic=Topic::pluck('namatopic','id');

	    return view('tkse/edit', ['tkse' => $tkse,'daftar_topic'=> $daftar_topic]);
	  }
	   public function updateTkse(Request $request,$id)
	    {
	      $tkse = \App\Profil::find($id);
	      $tkse -> update ($request->all());
	      return redirect('/tkse')->with('sukses','Data berhasil diupdate!');
	      }
	   public function deleteTkse($id)
	    {
	      $tkse = \App\Profil::find($id);
	      $tkse-> delete();
	       return redirect('/tkse')->with('sukses','Data berhasil dihapus!');
	    }
	   //kkti

	    public function indexTi()
    {
   	 $data_ti = \App\Profil::where('jeniskk','ti' )->get();//parameter, value model
   	 $daftar_topic=Topic::pluck('namatopic','id');
   		
	 return view('ti.index_ti',['data_ti' => $data_ti,'daftar_topic'=> $daftar_topic]);
	}

	public function createTi(Request $request)
	  {	
	  		
	  	 $this->validate($request,[
	      'namadosen'=> 'required',
	      'nidn'   =>'required',
	      'prodi'  => 'required',
	      'id_topic'=>'required',
	 
	    ]);

	  	 $topic=implode(",", $request->id_topic);
	  	 $namadosen=$request->namadosen;
	  	 $nidn=$request->nidn;
	  	 $prodi=$request->prodi;
	  	 $id_topic=$request->id_topic;
	  	


	  	 \DB::table('profil')->insert([
	  	  'namadosen'=>$namadosen,
	  	  'nidn'=>$nidn,
	  	  'prodi'=>$prodi,
	  	  'jeniskk'=>'ti',
	  	   'id_topic'=>$topic

	  	 ]);
	     
	  	return redirect('/ti')->with('sukses','Data berhasil diinputkan!');
	  }
	   public function editTi($id)
	  {
	    $ti = \App\Profil::find($id);
	    $daftar_topic=Topic::pluck('namatopic','id');
	    return view('ti/edit', ['ti' => $ti,'daftar_topic'=> $daftar_topic]);
	  }
	   public function updateTi(Request $request,$id)
	    {
	      $ti = \App\Profil::find($id);
	      $ti -> update ($request->all());
	      return redirect('/ti')->with('sukses','Data berhasil diupdate!');
	      }
	   public function deleteTi($id)
	    {
	      $ti = \App\Profil::find($id);
	      $ti-> delete();
	       return redirect('/ti')->with('sukses','Data berhasil dihapus!');
	    }
	}
	

   

