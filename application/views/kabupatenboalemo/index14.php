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
        text: 'Kabupaten Pohuwato'
    },
    subtitle: {
        text: 'Data Tahun 2014'
    },
    xAxis: {
        categories: ['januari-april', 'mei-agustus', 'september-desember']
    },
    yAxis: {
        title: {
            text: 'Ton'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Ton'
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
        name: 'Data Kabupaten Pohuwato',
        data: [44.95, 47.5, 58.375]
    }]
});
 </script>