<div class="container">
    <form action="<?= base_url("BulanController/updateData"); ?>" method="post">
        <div class="form-group">
            <label for='bulan'>Bulan</label>
            <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Bulan" value="<?= $bulan['bulan']; ?>">
            <input type="hidden" class="form-control" id="hidden" name="id" placeholder="hidden" value="<?= $bulan['id']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" name="submit" value="Simpan">
        </div>
    </form>
</div>

