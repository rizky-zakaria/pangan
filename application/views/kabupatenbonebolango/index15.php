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
        text: 'Produktivitas Kabupaten Bone Bolango'
    },
    subtitle: {
        text: 'Data Tahun 2015'
    },
    xAxis: {
        categories: ['januari-april', 'mei-agustus', 'september-desember']
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
        name: 'Data Kabupaten Bone Bolango',
        data: [44.95, 47.5, 58.375]
    }]
});
 </script>