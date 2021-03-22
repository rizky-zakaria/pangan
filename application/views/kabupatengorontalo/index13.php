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
        text: 'Produktivitas Kabupaten Gorontalo'
    },
    subtitle: {
        text: 'Data Tahun 2013'
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
            text: 'Kw/ha'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Kw/ha'
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
        name: 'Data Kabupaten Gorontalo',
        data: [
             <?php 
            foreach ($data as $key) {
              echo "" . $key['produktivitas'] . " ,";
            }
          ?>
        ]
    }]
});
 </script>