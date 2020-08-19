 <div class="col-md-6">

<div id ="cobamasuk7">

    </div>
</div>


<script type="text/javascript">
		
	 Highcharts.chart('cobamasuk7', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pencapaian Kontrak Manajemen Hibah Eksternal. Abdimas Eksternal, Rekognisi, Haki KK TKSE'
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
        name: 'TWI',

        data: <?php $tes = "["; 
                foreach ($TW1 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>


    }, {
        name: 'TW2',
        data: <?php $tes = "["; 
                foreach ($TW2 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'TW3',
        data: <?php $tes = "["; 
                foreach ($TW3 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }, {
        name: 'TW4',
        data: <?php $tes = "["; 
                foreach ($TW4 as $key => $value) {
                     $tes .= $value.",";
                     
        } 

        
        // $masuk  = substr_replace($tes, "", -2);
        $masuk = rtrim($tes, ',');
        $masuk .="]";
        echo $masuk;
        ?>

    }]
});



</script>