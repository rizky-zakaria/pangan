<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Tahun
     <a href="<?= base_url("TahunController/formTambah") ?>" class="btn btn-primary float-right"> Tambah </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tahun as $thn) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $thn['tahun']; ?></td>
                            <td>
                                <a href="<?= base_url("TahunController/formEdit/" . $thn['id']); ?>" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url("TahunController/hapus/" . $thn['id']); ?>" class="btn btn-danger">
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