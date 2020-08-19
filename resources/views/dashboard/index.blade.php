@extends('layouts.master')

@section('content')

    <div class="main">
            <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                     <div class="panel-heading">

                                    <div class="form-group ">
                                    <label for="exampleFormControlSelect1">Grafik</label>
                                    <select name="kelompokkeahlian" class="form-control" id="pilihgrafik">
                                     <option value="pilihan1 ">Pencapaian kontrak manajemen seluruh KK</option>
                                     <option value="pilihan2">Publikasi seminar KK per TW</option>
                                    <option value="pilihan3">Hibah Eksternal, Rekognisi, Abdimas Eksternal, Haki KK per TW </option>
                                    </select>
                                     </div>
                                
                   
                    <div class="left">
                    <div class="panel-body">
                      <div id="pilihan1">
                         <h2 class="panel-title">Grafik Pencapaian Kontrak Manajemen Seluruh KK</h2>
                            <div class="col-md-6">

                                <div id ="chartKm">
                                    
                                </div>
                            </div>

                          <div class="col-md-6">

                                <div id ="chartKm1">

                                </div>
                          </div>
                      </div>



        <div  id="pilihan2">
             <h2 class="panel-title">Grafik PERTW</h2>
          <div class="card card-body">
                <div class="cobamasuk1">

                </div>
                <div class="cobamasuk2">

                </div> 
                <div class="cobamasuk3">

                </div>
                <div class="cobamasuk4">

            </div>
        </div>

        </div>
         <div id="pilihan3">
             <h2 class="panel-title">Grafik 3</h2>
            <div class="card card-body">

                   <div class="cobamasuk5">

                    </div>
                    <div class="cobamasuk6">

                    </div> 
                     <div class="cobamasuk7">

                    </div>
                      <div class="cobamasuk8">

                    </div>
                </div>
                
            </div>


                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('footer')


<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

    Highcharts.chart('chartKm', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pencapaian Kontrak Manajemen Publikasi Seminar'
    },
    subtitle: {
        text: 'Source:Kelompok Keahlian'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!}

            //'Penelitian dibiayai Eksternal',
           // 'Jurnal Nasional(S2-S3)',
            //'Jurnal Nasional S4',
            //'Jurnal Internasional/Pameran Karya',
           // 'Publikasi Seminar Internasional',
            //'Rekognisi Kepakaran Dosen oleh Eksternal',
           // 'Abdimas dibiayai Eksternal',
            //'HaKi',
        ,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'pencapaian'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Rekayasa Data',

        data: <?php $tes = "["; 
                foreach ($kkrd as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>


    }, {
        name: 'Rekayasa Perangkat Lunak dan Multimedia',
        data: <?php $tes = "["; 
                foreach ($kkrplm as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'Tata Kelola dan Sistem Enterprise',
        data: <?php $tes = "["; 
                foreach ($kktkse as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'Teknologi Informasi',
        data: <?php $tes = "["; 
                foreach ($kkti as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }]
});

//chartKm1
  Highcharts.chart('chartKm1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pencapaian Kontrak Manajemen Hibah Eksternal, Abdimas Eksternal, Rekognisi, Haki'
    },
    subtitle: {
        text: 'Source:Kelompok Keahlian'
    },
    xAxis: {
        categories: {!!json_encode($categories1)!!}

            //'Penelitian dibiayai Eksternal',
           // 'Jurnal Nasional(S2-S3)',
            //'Jurnal Nasional S4',
            //'Jurnal Internasional/Pameran Karya',
           // 'Publikasi Seminar Internasional',
            //'Rekognisi Kepakaran Dosen oleh Eksternal',
           // 'Abdimas dibiayai Eksternal',
            //'HaKi',
        ,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'pencapaian'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Rekayasa Data',

        data: <?php $tes = "["; 
                foreach ($kkrd1 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>


    }, {
        name: 'Rekayasa Perangkat Lunak dan Multimedia',
        data: <?php $tes = "["; 
                foreach ($kkrplm1 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'Tata Kelola dan Sistem Enterprise',
        data: <?php $tes = "["; 
                foreach ($kktkse1 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'Teknologi Informasi',
        data: <?php $tes = "["; 
                foreach ($kkti1 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }]
});



$('.cobamasuk1').load("{{route('kkrd-pertw')}}");
$('.cobamasuk2').load("{{route('kkrplm-pertw')}}");
$('.cobamasuk3').load("{{route('kktkse-pertw')}}");
$('.cobamasuk4').load("{{route('kkti-pertw')}}");


$('.cobamasuk5').load("{{route('kkrd2-pertw')}}");
$('.cobamasuk6').load("{{route('kkrplm2-pertw')}}");
$('.cobamasuk7').load("{{route('kktkse2-pertw')}}");
$('.cobamasuk8').load("{{route('kkti2-pertw')}}");

$("#pilihan2").hide();
$("#pilihan3").hide();

//dropdown
$('#pilihgrafik').on('change', function() {
  var pilihgrafik = $(this).val();
  if(pilihgrafik=='pilihan2'){
   
    $("#pilihan1").hide();
    $("#pilihan2").show();
    $("#pilihan3").hide();
  }else if(pilihgrafik=='pilihan3'){
    $("#pilihan1").hide();
    $("#pilihan2").hide();
    $("#pilihan3").show();
  }else{
    $("#pilihan1").show();
    $("#pilihan2").hide();
    $("#pilihan3").hide();
  }
});


</script>


@stop
