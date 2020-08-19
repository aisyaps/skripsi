<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KmrdController extends Controller
{
	public function index(){
		
	return view('kmrd.index');
	}

  public function hibaheksternal(){
    
  $data_hibaheksternal = \App\Hibaheksternal::all();
  return view('kmrd.hibaheksternal', ['data_hibaheksternal' => $data_hibaheksternal]);
  }


	public function publikasiseminar(){
		
  $data_publikasiseminar = \App\Publikasiseminar::all();
 
  return view('kmrd.publikasiseminar', ['data_publikasiseminar' => $data_publikasiseminar]);
  }

	public function rekognisi(){

 $data_rekognisi = \App\Rekognisi::all();
  return view('kmrd.rekognisi', ['data_rekognisi' => $data_rekognisi]);	
	}

	public function abdimaseksternal(){

 $data_abdimaseksternal = \App\Abdimaseksternal::all();
  return view('kmrd.abdimaseksternal', ['data_abdimaseksternal' => $data_abdimaseksternal]); 

	}

	public function haki(){
	
 $data_haki = \App\Haki::all();
  return view('kmrd.haki', ['data_haki' => $data_haki]); 

 }
}

