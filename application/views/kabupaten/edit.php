<div class="container">
    <form action="<?= base_url("KabupatenController/updateData"); ?>" method="post">
        <div class="form-group">
            <label for='Kabupaten'>Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" value="<?= $kabupaten['kabupaten']; ?>">
            <input type="hidden" class="form-control" id="hidden" name="id" placeholder="hidden" value="<?= $kabupaten['id']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" name="submit" value="Simpan">
        </div>
    </form>
</div>

