
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
        text: 'Produktivitas Tanaman Jagung Di Provinsi Gorontalo'
    },
    subtitle: {
        text: 'Data Tahun 2012-2015'
    },
    xAxis: {
        categories: ['Tahun 2012', 'Tahun 2013', 'Tahun 2014', 'Tahun 2015'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Kw/ha'
        },
        labels: {
            formatter: function () {
                return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Kw/ha'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Data Produktivitas Jagung',
        data: [<?= $dua['sum']; ?>, <?= $tiga['sum']; ?>, <?= $empat['sum']; ?>, <?= $lima['sum']; ?>]
  
    }]
});
 </script>