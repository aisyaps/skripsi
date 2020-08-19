<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        // ambil publikasi seminar
      $kkrd=[];
      $kkrd[] = $this->hitungData('publikasiseminar','publikasi jurnal (S2-S3)');
      $kkrd[] = $this->hitungData('publikasiseminar','publikasi jurnal (S4)');
      $kkrd[] = $this->hitungData('publikasiseminar','publikasi seminar internasional');
      $kkrd[] = $this->hitungData('publikasiseminar','publikasi jurnal internasional');
      
      //ambil kmrplmpublikasiseminar
      $kkrplm=[];
      $kkrplm[] = $this->hitungData('kmrplmpublikasiseminar','publikasi jurnal (S2-S3)');
      $kkrplm[] = $this->hitungData('kmrplmpublikasiseminar','publikasi jurnal (S4)');
      $kkrplm[] = $this->hitungData('kmrplmpublikasiseminar','publikasi seminar internasional');
      $kkrplm[] = $this->hitungData('kmrplmpublikasiseminar','publikasi jurnal internasional');

      //ambil kmtkseps
       $kktkse=[];
      $kktkse[] = $this->hitungData('kmtkseps','publikasi jurnal (S2-S3)');
      $kktkse[] = $this->hitungData('kmtkseps','publikasi jurnal (S4)');
      $kktkse[] = $this->hitungData('kmtkseps','publikasi seminar internasional');
      $kktkse[] = $this->hitungData('kmtkseps','publikasi jurnal internasional');


      //ambil kmtips
      $kkti=[];
      $kkti[] = $this->hitungData('kmtips','publikasi jurnal (S2-S3)');
      $kkti[] = $this->hitungData('kmtips','publikasi jurnal (S4)');
      $kkti[] = $this->hitungData('kmtips','publikasi seminar internasional');
      $kkti[] = $this->hitungData('kmtips','publikasi jurnal internasional');


     


      // dd($publikasi_jurnal_S2S3);

      //definisikan kategori
      $categories = [
        'publikasi jurnal S2-S3',
        'publikasi jurnal S4',
        'publikasi seminar internasional',
        'publikasi jurnal internasional',
      ];




      $kkrd1=[];
      $kkrd1[] = $this->hitungdata1('hibaheksternal');
      $kkrd1[] = $this->hitungdata1('rekognisi');
      $kkrd1[] = $this->hitungdata1('abdimaseksternal');
      $kkrd1[] = $this->hitungdata1('haki');

      $kkrplm1=[];
      $kkrplm1[] = $this->hitungdata1('kmrplmhibaheksternal');
      $kkrplm1[] = $this->hitungdata1('kmrplmrekognisi');
      $kkrplm1[] = $this->hitungdata1('kmrplmabdimaseksternal');
      $kkrplm1[] = $this->hitungdata1('kmrplmhaki');


       $kktkse1=[];
      $kktkse1[] = $this->hitungdata1('kmtksehe');
      $kktkse1[] = $this->hitungdata1('kmtksere');
      $kktkse1[] = $this->hitungdata1('kmtkseae');
      $kktkse1[] = $this->hitungdata1('kmtksehk');


      $kkti1=[];
      $kkti1[] = $this->hitungdata1('kmtihe');
      $kkti1[] = $this->hitungdata1('kmtire');
      $kkti1[] = $this->hitungdata1('kmtiae');
      $kkti1[] = $this->hitungdata1('kmtihk');


 $categories1 = [
        'Hibah Eksternal',
        'Rekognisi',
        'Abdimas eksternal',
        'Haki',
      ];



      //tampil pertw
      
      

         //tw kktkse
      $kktkseS2S3=[];
      $kktkseS2S3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW1');
      $kktkseS2S3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW2');
      $kktkseS2S3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW3');
      $kktkseS2S3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW4');

      $kktkseS4=[];
       $kktkseS4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW1');
       $kktkseS4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW2');
       $kktkseS4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW3');
       $kktkseS4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW4');

       $kktkseSI=[];
        $kktkseSI[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW1');
        $kktkseSI[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW2');
        $kktkseSI[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW3');
        $kktkseSI[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW4');

        $kktkseJI=[];
        $kktkseJI[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW1');
        $kktkseJI[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW2');
        $kktkseJI[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW3');
        $kktkseJI[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW4');




         //tw kkti
        $kktiS2S3=[];
        $kktiS2S3[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW1');
        $kktiS2S3[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW2');
        $kktiS2S3[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW3');
        $kktiS2S3[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW4');

        $kktiS4=[];
         $kktiS4[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW1');
         $kktiS4[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW2');
         $kktiS4[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW3');
         $kktiS4[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW4');

         $kktiSI=[];
          $kktiSI[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW1');
          $kktiSI[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW2');
          $kktiSI[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW3');
          $kktiSI[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW4');

          $kktiJI=[];
          $kktiJI[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW1');
          $kktiJI[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW2');
          $kktiJI[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW3');
          $kktiJI[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW4');

    
      // $kkrd[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S4)');
      // $kkrd[] = $this->hitungData2('publikasiseminar','publikasi seminar internasional');
      // $kkrd[] = $this->hitungData2('publikasiseminar','publikasi jurnal internasional');





      // return view('dashboard.index',compact('categories','kkrd','kkrplm','kktkse','kkti','categories1','kkrd1','kkrplm1','kktkse1','kkti1','kkrdS2S3','kkrdS4','kkrdSI','kkrdJI','kkrplmS2S3','kkrplmS4','kkrplmSI','kkrplmJI','kktkseS2S3','kktkseS4','kktkseSI','kktkseJI','kktiS2S3','kktiS4','kktiSI','kktiJI'));

         return view('dashboard.index',compact('categories','kkrd','kkrplm','kktkse','kkti','categories1','kkrd1','kkrplm1','kktkse1','kkti1'));
    }

    //fungsi manggil kkrd pertw

    public function kkrdPerTW()
    {
       $categories = [
        'publikasi jurnal S2-S3',
        'publikasi jurnal S4',
        'publikasi seminar internasional',
        'publikasi jurnal internasional',
      ];

        $TW1=[];
        $TW1[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S2-S3)','TW1');
        $TW1[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S4)','TW1');
        $TW1[] = $this->hitungData2('publikasiseminar','publikasi seminar internasional','TW1');
        $TW1[] = $this->hitungData2('publikasiseminar','publikasi jurnal internasional','TW1');
        // dd($kkrdS2S3);

         $TW2=[];
        $TW2[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S2-S3)','TW2');
        $TW2[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S4)','TW2');
        $TW2[] = $this->hitungData2('publikasiseminar','publikasi seminar internasional','TW2');
        $TW2[] = $this->hitungData2('publikasiseminar','publikasi jurnal internasional','TW2');

         $TW3=[];
        $TW3[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S2-S3)','TW3');
        $TW3[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S4)','TW3');
        $TW3[] = $this->hitungData2('publikasiseminar','publikasi seminar internasional','TW3');
        $TW3[] = $this->hitungData2('publikasiseminar','publikasi jurnal internasional','TW3');


         $TW4=[];
        $TW4[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S2-S3)','TW4');
        $TW4[] = $this->hitungData2('publikasiseminar','publikasi jurnal (S4)','TW4');
        $TW4[] = $this->hitungData2('publikasiseminar','publikasi seminar internasional','TW4');
        $TW4[] = $this->hitungData2('publikasiseminar','publikasi jurnal internasional','TW4');

        // dd($kkrdJI);


         return view('dashboard.pertw.kkrd',compact('categories','TW1','TW2','TW3','TW4'));
    }


    public function kkrplmPerTW()
    {
       $categories = [
        'publikasi jurnal S2-S3',
        'publikasi jurnal S4',
        'publikasi seminar internasional',
        'publikasi jurnal internasional',
      ];

        $TW1=[];
        $TW1[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S2-S3)','TW1');
        $TW1[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S4)','TW1');
        $TW1[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi seminar internasional','TW1');
        $TW1[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal internasional','TW1');
        // dd($kkrdS2S3);

         $TW2=[];
        $TW2[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S2-S3)','TW2');
        $TW2[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S4)','TW2');
        $TW2[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi seminar internasional','TW2');
        $TW2[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal internasional','TW2');

         $TW3=[];
        $TW3[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S2-S3)','TW3');
        $TW3[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S4)','TW3');
        $TW3[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi seminar internasional','TW3');
        $TW3[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal internasional','TW3');


         $TW4=[];
        $TW4[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S2-S3)','TW4');
        $TW4[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal (S4)','TW4');
        $TW4[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi seminar internasional','TW4');
        $TW4[] = $this->hitungData2('kmrplmpublikasiseminar','publikasi jurnal internasional','TW4');

        // dd($kkrdJI);


         return view('dashboard.pertw.kkrplm',compact('categories','TW1','TW2','TW3','TW4'));
    }



     public function kktksePerTW()
    {
       $categories = [
        'publikasi jurnal S2-S3',
        'publikasi jurnal S4',
        'publikasi seminar internasional',
        'publikasi jurnal internasional',
      ];

        $TW1=[];
        $TW1[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW1');
        $TW1[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW1');
        $TW1[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW1');
        $TW1[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW1');
        // dd($kkrdS2S3);

         $TW2=[];
        $TW2[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW2');
        $TW2[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW2');
        $TW2[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW2');
        $TW2[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW2');

         $TW3=[];
        $TW3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW3');
        $TW3[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW3');
        $TW3[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW3');
        $TW3[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW3');


         $TW4=[];
        $TW4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S2-S3)','TW4');
        $TW4[] = $this->hitungData2('kmtkseps','publikasi jurnal (S4)','TW4');
        $TW4[] = $this->hitungData2('kmtkseps','publikasi seminar internasional','TW4');
        $TW4[] = $this->hitungData2('kmtkseps','publikasi jurnal internasional','TW4');

        // dd($kkrdJI);


         return view('dashboard.pertw.kktkse',compact('categories','TW1','TW2','TW3','TW4'));
    }



 public function kktiPerTW()
    {
       $categories = [
        'publikasi jurnal S2-S3',
        'publikasi jurnal S4',
        'publikasi seminar internasional',
        'publikasi jurnal internasional',
      ];

        $TW1=[];
        $TW1[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW1');
        $TW1[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW1');
        $TW1[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW1');
        $TW1[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW1');
        // dd($kkrdS2S3);

         $TW2=[];
        $TW2[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW2');
        $TW2[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW2');
        $TW2[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW2');
        $TW2[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW2');

         $TW3=[];
        $TW3[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW3');
        $TW3[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW3');
        $TW3[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW3');
        $TW3[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW3');


         $TW4=[];
        $TW4[] = $this->hitungData2('kmtips','publikasi jurnal (S2-S3)','TW4');
        $TW4[] = $this->hitungData2('kmtips','publikasi jurnal (S4)','TW4');
        $TW4[] = $this->hitungData2('kmtips','publikasi seminar internasional','TW4');
        $TW4[] = $this->hitungData2('kmtips','publikasi jurnal internasional','TW4');

        // dd($kkrdJI);


         return view('dashboard.pertw.kkti',compact('categories','TW1','TW2','TW3','TW4'));
    }


    public function kkrd2PerTw()
    {

        $categories1 = [
            'Hibah Eksternal',
            'Rekognisi',
            'Abdimas eksternal',
            'Haki',
          ];
           $TW1=[];
            $TW1[] = $this->hitungData3('hibaheksternal','TW1');
            $TW1[] = $this->hitungData3('rekognisi','TW1');
            $TW1[] = $this->hitungData3('abdimaseksternal','TW1');
            $TW1[] = $this->hitungData3('haki','TW1');


             $TW2=[];
            $TW2[] = $this->hitungData3('hibaheksternal','TW2');
            $TW2[] = $this->hitungData3('rekognisi','TW2');
            $TW2[] = $this->hitungData3('abdimaseksternal','TW2');
            $TW2[] = $this->hitungData3('haki','TW2');

             $TW3=[];
                  $TW3[] = $this->hitungData3('hibaheksternal','TW3');
                  $TW3[] = $this->hitungData3('rekognisi','TW3');
                  $TW3[] = $this->hitungData3('abdimaseksternal','TW3');
                  $TW3[] = $this->hitungData3('haki','TW3');

           $TW4=[];
                  $TW4[] = $this->hitungData3('hibaheksternal','TW4');
                  $TW4[] = $this->hitungData3('rekognisi','TW4');
                  $TW4[] = $this->hitungData3('abdimaseksternal','TW4');
                  $TW4[] = $this->hitungData3('haki','TW4');


          return view('dashboard.pertw.kkrd2',compact('categories1','TW1','TW2','TW3','TW4'));
          }




public function kkrplm2PerTw()
    {

          $categories1 = [
              'Hibah Eksternal',
              'Rekognisi',
              'Abdimas eksternal',
              'Haki',
            ];
             $TW1=[];
              $TW1[] = $this->hitungData3('kmrplmhibaheksternal','TW1');
              $TW1[] = $this->hitungData3('kmrplmrekognisi','TW1');
              $TW1[] = $this->hitungData3('kmrplmabdimaseksternal','TW1');
              $TW1[] = $this->hitungData3('kmrplmhaki','TW1');


               $TW2=[];
              $TW2[] = $this->hitungData3('kmrplmhibaheksternal','TW2');
              $TW2[] = $this->hitungData3('kmrplmrekognisi','TW2');
              $TW2[] = $this->hitungData3('kmrplmabdimaseksternal','TW2');
              $TW2[] = $this->hitungData3('kmrplmhaki','TW2');

             $TW3=[];
                  $TW3[] = $this->hitungData3('kmrplmhibaheksternal','TW3');
                  $TW3[] = $this->hitungData3('kmrplmrekognisi','TW3');
                  $TW3[] = $this->hitungData3('kmrplmabdimaseksternal','TW3');
                  $TW3[] = $this->hitungData3('kmrplmhaki','TW3');

           $TW4=[];
                  $TW4[] = $this->hitungData3('kmrplmhibaheksternal','TW4');
                  $TW4[] = $this->hitungData3('kmrplmrekognisi','TW4');
                  $TW4[] = $this->hitungData3('kmrplmabdimaseksternal','TW4');
                  $TW4[] = $this->hitungData3('kmrplmhaki','TW4');


          return view('dashboard.pertw.kkrplm2',compact('categories1','TW1','TW2','TW3','TW4'));
          }


          public function kktkse2PerTw()
    {

          $categories1 = [
              'Hibah Eksternal',
              'Rekognisi',
              'Abdimas eksternal',
              'Haki',
            ];
             $TW1=[];
              $TW1[] = $this->hitungData3('kmtksehe','TW1');
              $TW1[] = $this->hitungData3('kmtksere','TW1');
              $TW1[] = $this->hitungData3('kmtkseae','TW1');
              $TW1[] = $this->hitungData3('kmtksehk','TW1');


               $TW2=[];
              $TW2[] = $this->hitungData3('kmtksehe','TW2');
              $TW2[] = $this->hitungData3('kmtksere','TW2');
              $TW2[] = $this->hitungData3('kmtkseae','TW2');
              $TW2[] = $this->hitungData3('kmtksehk','TW2');

             $TW3=[];
                  $TW3[] = $this->hitungData3('kmtksehe','TW3');
                  $TW3[] = $this->hitungData3('kmtksere','TW3');
                  $TW3[] = $this->hitungData3('kmtkseae','TW3');
                  $TW3[] = $this->hitungData3('kmtksehk','TW3');

           $TW4=[];
                  $TW4[] = $this->hitungData3('kmtksehe','TW4');
                  $TW4[] = $this->hitungData3('kmtksere','TW4');
                  $TW4[] = $this->hitungData3('kmtkseae','TW4');
                  $TW4[] = $this->hitungData3('kmtksehk','TW4');


          return view('dashboard.pertw.kktkse2',compact('categories1','TW1','TW2','TW3','TW4'));
          }

public function kkti2PerTw()
    {

          $categories1 = [
              'Hibah Eksternal',
              'Rekognisi',
              'Abdimas eksternal',
              'Haki',
            ];
             $TW1=[];
              $TW1[] = $this->hitungData3('kmtihe','TW1');
              $TW1[] = $this->hitungData3('kmtire','TW1');
              $TW1[] = $this->hitungData3('kmtiae','TW1');
              $TW1[] = $this->hitungData3('kmtihk','TW1');


               $TW2=[];
              $TW2[] = $this->hitungData3('kmtihe','TW2');
              $TW2[] = $this->hitungData3('kmtire','TW2');
              $TW2[] = $this->hitungData3('kmtiae','TW2');
              $TW2[] = $this->hitungData3('kmtihk','TW2');

             $TW3=[];
                  $TW3[] = $this->hitungData3('kmtihe','TW3');
                  $TW3[] = $this->hitungData3('kmtire','TW3');
                  $TW3[] = $this->hitungData3('kmtiae','TW3');
                  $TW3[] = $this->hitungData3('kmtihk','TW3');

           $TW4=[];
                  $TW4[] = $this->hitungData3('kmtihe','TW4');
                  $TW4[] = $this->hitungData3('kmtire','TW4');
                  $TW4[] = $this->hitungData3('kmtiae','TW4');
                  $TW4[] = $this->hitungData3('kmtihk','TW4');


          return view('dashboard.pertw.kkti2',compact('categories1','TW1','TW2','TW3','TW4'));
          }

         


    //fungsi hitung data
    public function hitungData($table, $kategori)
    {
      $hitung = DB::table($table)->where('kategori',$kategori)->count();
      return $hitung;                                                     
    }
     public function hitungdata1($table)
        {
          $hitung = DB::table($table)->count();
          return $hitung;                                                     
        }
    public function hitungData2($table, $kategori, $periode)
    {
      $hitung = DB::table($table)->where('kategori',$kategori)->where('periode', $periode)->count();
      return $hitung;                                                     
    }
     public function hitungData3($table, $periode)
    {
      $hitung = DB::table($table)->where('periode', $periode)->count();
      return $hitung;                                                     
    }



    
}
