<div class="container">
    <form action="<?= base_url("TahunController/insertData"); ?>" method="post">
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" name="submit" value="Simpan">
        </div>
    </form>
</div>