<div class="container">
    <form action="<?= base_url("KabupatenController/insertData"); ?>" method="post">
        <div class="form-group">
            <label for="kabupaten">Nama Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" placeholder="Nama Kabupaten" name="kabupaten">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-success" id="kabupaten" value="Simpan">
        </div>
    </form>
</div>