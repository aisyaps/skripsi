<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmtkseController extends Controller
{
    public function index(){
		
	return view('kmtkse.index');
	}

	 public function kmtksehe(Request $request){

		 $data_kmtksehe = \App\Kmtksehe::all();
		 return view('kmtkse.kmtksehe', ['data_kmtksehe' => $data_kmtksehe]);
	}
		 public function kmtkseps(Request $request){

		 $data_kmtkseps = \App\Kmtkseps::all();
		 return view('kmtkse.kmtkseps', ['data_kmtkseps' => $data_kmtkseps]);
	}

	 public function kmtksere(Request $request){

		 $data_kmtksere = \App\Kmtksere::all();
		 return view('kmtkse.kmtksere', ['data_kmtksere' => $data_kmtksere]);
	}

	 public function kmtkseae(Request $request){

		 $data_kmtkseae = \App\Kmtkseae::all();
		 return view('kmtkse.kmtkseae', ['data_kmtkseae' => $data_kmtkseae]);
	}


 public function kmtksehk(Request $request){

		 $data_kmtksehk = \App\Kmtksehk::all();
		 return view('kmtkse.kmtksehk', ['data_kmtksehk' => $data_kmtksehk]);
	}
}
