 
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
       Kabupaten Gorontalo
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?= base_url("kabupatengorontalo/IndexController12") ?>">Tahun 2012</a>
      <a class="dropdown-item" href="<?= base_url("kabupatengorontalo/IndexController13") ?>">Tahun 2013</a>
      <a class="dropdown-item" href="<?= base_url("kabupatengorontalo/IndexController14") ?>">Tahun 2014</a>
      <a class="dropdown-item" href="<?= base_url("kabupatengorontalo/IndexController15") ?>">Tahun 2015</a>
    </div>
  </div>
 

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
        text: 'Produktivitas Tanaman Jagung Per-Kabupaten'
    },
    subtitle: {
        text: 'Data Tahun 2012-2015'
    },
    xAxis: {
        categories: ['Tahun 2012', 'Tahun 2013', 'Tahun 2014', 'Tahun 2015' ],
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
        name: 'Kabupaten Gorontalo',
        data: [<?= $dua['sum']; ?>, <?= $tiga['sum']; ?>, <?= $empat['sum']; ?>, <?= $lima['sum']; ?>]
   // }, {
   //      name: 'Kabupaten Gorontalo Utara',
   //      data: [353922, 560982, 320302, 434005]
    // }, {
    //     name: 'Kabupaten Bone Bolango',
    //     data: [213922, 460982, 420302, 334005]
   //  }, {
   //      name: 'Kabupaten Boalemo',
   //      data: [513922, 560982, 520302, 334005]
   //  }, {
   //      name: 'Kabupaten Pohuwato',
   //      data: [313922, 260982, 320302, 234005]

    }]
  
});
 </script>

