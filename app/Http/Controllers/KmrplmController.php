<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmrplmController extends Controller
{
    public function index(){
		
	return view('kmrplm.index');
	}

	 public function kmrplmhibaheksternal(Request $request){

		 $data_kmrplmhibaheksternal = \App\Kmrplmhibaheksternal::all();
		 return view('kmrplm.kmrplmhibaheksternal', ['data_kmrplmhibaheksternal' => $data_kmrplmhibaheksternal]);
	}
		 public function kmrplmpublikasiseminar(Request $request){

		 $data_kmrplmpublikasiseminar = \App\Kmrplmpublikasiseminar::all();
		 return view('kmrplm.kmrplmpublikasiseminar', ['data_kmrplmpublikasiseminar' => $data_kmrplmpublikasiseminar]);
	}

	 public function kmrplmrekognisi(Request $request){

		 $data_kmrplmrekognisi = \App\Kmrplmrekognisi::all();
		 return view('kmrplm.kmrplmrekognisi', ['data_kmrplmrekognisi' => $data_kmrplmrekognisi]);
	}

	 public function kmrplmabdimaseksternal(Request $request){

		 $data_kmrplmabdimaseksternal = \App\Kmrplmabdimaseksternal::all();
		 return view('kmrplm.kmrplmabdimaseksternal', ['data_kmrplmabdimaseksternal' => $data_kmrplmabdimaseksternal]);
	}


 public function kmrplmhaki(Request $request){

		 $data_kmrplmhaki = \App\Kmrplmhaki::all();
		 return view('kmrplm.kmrplmhaki', ['data_kmrplmhaki' => $data_kmrplmhaki]);
	}
}
