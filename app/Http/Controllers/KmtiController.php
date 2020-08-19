<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmtiController extends Controller
{
    public function index(){
		
	return view('kmti.index');
	}

	 public function kmtihe(Request $request){

		 $data_kmtihe = \App\Kmtihe::all();
		 return view('kmti.kmtihe', ['data_kmtihe' => $data_kmtihe]);
	}
		 public function kmtips(Request $request){

		 $data_kmtips = \App\Kmtips::all();
		 return view('kmti.kmtips', ['data_kmtips' => $data_kmtips]);
	}

	 public function kmtire(Request $request){
		 $data_kmtire = \App\Kmtire::all();
		 return view('kmti.kmtire', ['data_kmtire' => $data_kmtire]);
	}

	 public function kmtiae(Request $request){

		 $data_kmtiae = \App\Kmtiae::all();
		 return view('kmti.kmtiae', ['data_kmtiae' => $data_kmtiae]);
	}


      public function kmtihk(Request $request){

		 $data_kmtihk = \App\Kmtihk::all();
		 return view('kmti.kmtihk', ['data_kmtihk' => $data_kmtihk]);
	}
}
