 <div class="row">
      <div class="col-lg-12">
        <div id="container"></div>
    </div>
   </div>

   
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Curah Hujan'
    },
    subtitle: {
        text: 'Data Tahun 2014'
    },
    xAxis: {
        categories: [
             <?php 
            foreach ($data as $key) {
              echo "'" . $key['bulan'] . " ',";
            }
          ?>
        ]
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: '(°C)'
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Curah Hujan',
        data: [
             <?php 
            foreach ($data as $key) {
              echo "" . $key['curah_hujan'] . " ,";
            }
          ?>
        ]
    }]
});
 </script>