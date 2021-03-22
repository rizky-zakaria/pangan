<div class="container">
    <form action="<?= base_url("DataAktualController/insertData"); ?>" method="post">
        <div class="form-group">
            <label for="suhu">Suhu</label>
            <input type="text" class="form-control" id="suhu" placeholder="suhu" name="suhu">
        </div>
        <div class="form-group">
            <label for="kelembapan">Kelembapan</label>
            <input type="text" class="form-control" id="kelembapan" placeholder="kelembapan" name="kelembapan">
        </div>
        <div class="form-group">
            <label for="curah_hujan">Curah Hujan</label>
            <input type="text" class="form-control" id="curah_hujan" placeholder="curah_hujan" name="curah_hujan">
        </div>
        <div class="form-group">
            <label for="penyinaran_matahari">Penyinaran Matahari</label>
            <input type="text" class="form-control" id="penyinaran_matahari" placeholder="penyinaran_matahari" name="penyinaran_matahari">
        </div>
        <div class="form-group">
            <label for="luas_panen">Luas Panen</label>
            <input type="text" class="form-control" id="luas_panen" placeholder="luas_panen" name="luas_panen">
        </div>
        <div class="form-group">
            <label for='produksi'>Produksi</label>
            <input type="text" class="form-control" id="produksi" placeholder="produksi" name="produksi">
        </div>
        <div class="form-group">
            <label for="produktivitas">Produktivitas</label>
            <input type="text" class="form-control" id="produktivitas" placeholder="produktivitas" name="produktivitas">
        </div>
         <div class="form-group">
             <label for="sel1">Bulan</label>
             <select name="bulan" class="form-control" id="sel1">
                <?php foreach ($bulan as $bln ) { ?>
                  <option value="<?= $bln['id']; ?>"><?= $bln['bulan']; ?></option> 
                <?php
                } ?>
            </select>
        </div>
        <div class="form-group">
             <label for="sel1">Tahun</label>
             <select name="tahun" class="form-control" id="sel1">
                <?php foreach ($tahun as $thn ) { ?>
                  <option value="<?= $thn['id']; ?>"><?= $thn['tahun']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div>
        <div class="form-group">
             <label for="sel1">Kabupaten</label>
             <select name="kabupaten" class="form-control" id="sel1">
                <?php foreach ($kabupaten as $kab ) { ?>
                  <option value="<?= $kab['id']; ?>"><?= $kab['kabupaten']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" name="submit" value="Simpan">
        </div>
    </form>
</div>