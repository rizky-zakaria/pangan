<div class="container">
    <form action="<?= base_url("BulanController/insertData"); ?>" method="post">
        <div class="form-group">
            <label for="kabupaten">Nama Bulan</label>
            <input type="text" class="form-control" id="kabupaten" placeholder="Nama Bulan" name="bulan">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" id="kabupaten" value="Simpan">
        </div>
    </form>
</div>