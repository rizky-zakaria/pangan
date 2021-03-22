<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Suhu
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url("suhu/AktualController12") ?>">Tahun 2012</a>
        <a class="dropdown-item" href="<?= base_url("suhu/AktualController13") ?>">Tahun 2013</a>
        <a class="dropdown-item" href="<?= base_url("suhu/AktualController14") ?>">Tahun 2014</a>
        <a class="dropdown-item" href="<?= base_url("suhu/AktualController15") ?>">Tahun 2015</a>
    </div>
</div>
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Kelembapan
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url("kelembapan/KelembapanController12") ?>">Tahun 2012</a>
        <a class="dropdown-item" href="<?= base_url("kelembapan/KelembapanController13") ?>">Tahun 2013</a>
        <a class="dropdown-item" href="<?= base_url("kelembapan/KelembapanController14") ?>">Tahun 2014</a>
        <a class="dropdown-item" href="<?= base_url("kelembapan/KelembapanController15") ?>">Tahun 2015</a>
    </div>
</div>
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Curah Hujan
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url("curahhujan/CurahHujanController12") ?>">Tahun 2012</a>
        <a class="dropdown-item" href="<?= base_url("curahhujan/CurahHujanController13") ?>">Tahun 2013</a>
        <a class="dropdown-item" href="<?= base_url("curahhujan/CurahHujanController14") ?>">Tahun 2014</a>
        <a class="dropdown-item" href="<?= base_url("curahhujan/CurahHujanController15") ?>">Tahun 2015</a>
    </div>
</div>
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Penyinaran Matahari
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url("penyinaran/PenyinaranController12") ?>">Tahun 2012</a>
        <a class="dropdown-item" href="<?= base_url("penyinaran/PenyinaranController13") ?>">Tahun 2013</a>
        <a class="dropdown-item" href="<?= base_url("penyinaran/PenyinaranController14") ?>">Tahun 2014</a>
        <a class="dropdown-item" href="<?= base_url("penyinaran/PenyinaranController15") ?>">Tahun 2015</a>
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
            text: 'Data Aktual'
        },
        subtitle: {
            text: 'Data Tahun 2012-2015'
        },
        xAxis: {
            categories: ['Tahun 2012', 'Tahun 2013', 'Tahun 2014', 'Tahun 2015']
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
            name: 'Suhu',
            data: [
                <?php
                foreach ($diagram as $key) {
                    echo "" . $key['suhu'] . " ,";
                }
                ?>
            ]
        }, {
            name: 'Kelembapan',
            data: [
                <?php
                foreach ($diagram as $key) {
                    echo "" . $key['kelembapan'] . " ,";
                }
                ?>
            ]
        }, {
            name: 'Curah_Hujan',
            data: [
                <?php
                foreach ($diagram as $key) {
                    echo "" . $key['curah'] . " ,";
                }
                ?>
            ]
        }, {
            name: 'Penyinaran_Matahari',
            data: [
                <?php
                foreach ($diagram as $key) {
                    echo "" . $key['matahari'] . " ,";
                }
                ?>
            ]
        }]
    });
</script>