<div class="container">
    <form action="<?= base_url("TahunController/updateData"); ?>" method="post">
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?= $tahun['tahun']; ?>">
            <input type="hidden" class="form-control" id="hidden" name="id" placeholder="hidden" value="<?= $tahun['id']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" name="submit" value="Simpan">
        </div>
    </form>
</div>