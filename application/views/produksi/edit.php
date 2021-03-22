<div class="container">
    <form action="<?= base_url("ProduksiController/updateData"); ?>" method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Data Aktual</label>
            <select class="form-control" id="exampleFormControlSelect1" name="data">
                <?php
                foreach ($input as $ipt) {
                ?>
                    <option value="<?= $ipt['id']; ?>"><?= $ipt['id'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for='produksi'>produksi</label>
            <input type="text" class="form-control" id="produksi" placeholder="produksi" name="produksi" value="<?= $produksi['produksi']; ?>">
            <input type="hidden" class="form-control" id="produksi" placeholder="produksi" name="id" value="<?= $produksi['id']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" id="kabupaten" value="Simpan">
        </div>
    </form>
</div>