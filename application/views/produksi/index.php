<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Hasil Produksi
        <a href="<?= base_url("ProduksiController/formTambah"); ?>" class="btn btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Kabupaten</th>
                        <th>Tahun</th>
                        <th>Produksi</th>
                        <th>Produktivitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Kabupaten</th>
                        <th>Tahun</th>
                        <th>Produksi</th>
                        <th>Produktivitas</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($produksi as $prd) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $prd['bulan']; ?></td>
                            <td><?= $prd['kabupaten']; ?></td>
                            <td><?= $prd['tahun']; ?></td>
                            <td><?= $prd['produksi'] ?></td>
                            <td><?= $prd['produktivitas'] ?></td>
                            <td>
                                <a href="<?= base_url("ProduksiController/formedit/" . $prd['id']); ?>" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url("ProduksiController/hapus/" . $prd['id']); ?>" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>         
                </tbody>
            </table>
        </div>
    </div>

    