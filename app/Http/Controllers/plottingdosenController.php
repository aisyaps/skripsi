<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plottingdosen;
use DB;

class plottingdosenController extends Controller

{
		public function create(){

		return view('plottingdosen.create');
  }
	public function index(){

	$file=Plottingdosen::all();//nama berupa model dan
		
	return view('plottingdosen.view', compact('file'));
	}
	
 
	public function store(Request $request){

	// dd($request->pilihan);
 		$data = new Plottingdosen;

		// menyimpan plottingdosen file yang diupload ke variabel $file
		if($request->file('file')) {
			$file=$request->file('file');
		 	$filename=time().'.'.$file->getClientOriginalExtension();
		 	$request->file->move('storage/', $filename);


		 	$data->file=$filename;

		}
 			$data->judul=$request->judul;
 			$data->keterangan =$request->keterangan;
 			$data->save();

 			if ($request->pilihan=='plotting') {
 				return redirect('kirimemail');
 			}else{
 				return redirect('kirimemail2');
 			}

 		}
 		// public function show($id){

 		// 	$data=Plottingdosen::find($id);//namespace, model agar terhubung
		
			// return view('plottingdosen.detail',compact('data'));
 		// }
 		
 		public function download($file){

 			return response()->download('storage/'. $file);

 		}
 		  

 	public function delete($id)
    {
      $data = \App\Plottingdosen::find($id);
      $data-> delete();
       return redirect('/plottingdosen')->with('sukses','Data berhasil dihapus!');
    }

      }
