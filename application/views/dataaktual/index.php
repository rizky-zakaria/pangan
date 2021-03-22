<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Aktual
        <?php 
        if ($this->session->userdata('role')  == 1) {
            ?>
            <a href="<?= base_url("DataAktualController/formTambah") ?>" class="btn btn-primary float-right">Tambah</a>
    
            <?php
        }
        ?>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Suhu</th>
                        <th>Kelembapan</th>
                        <th>Curah Hujan</th>
                        <th>Penyinaran Matahari</th>
                        <th>Luas Panen</th>
                        <th>Produksi</th>
                        <th>Produktivitas</th>
                        <th>Tahun</th>
                        <th>Kabupaten</th>
                        <?php
                        if ($this->session->userdata('role') == 1) {
                            ?>
<th>Action</th>
                            <?php
                        }
                        ?>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan</th>
                        <th>Suhu</th>
                        <th>Kelembapan</th>
                        <th>Curah Hujan</th>
                        <th>Penyinaran Matahari</th>
                        <th>Luas Panen</th>
                        <th>Produksi</th>
                        <th>Produktivitas</th>
                        <th>Tahun</th>
                        <th>Kabupaten</th>
                        <?php
                        if ($this->session->userdata('role') == 1) {
                            ?>
<th>Action</th>
                            <?php
                        }
                        ?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataaktual as $da) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $da['bulan']; ?></td>
                            <td><?= $da['suhu']; ?></td>
                            <td><?= $da['kelembapan']; ?></td>
                            <td><?= $da['curah_hujan']; ?></td>
                            <td><?= $da['penyinaran_matahari']; ?></td>
                            <td><?= $da['luas_panen']; ?></td>
                            <td><?= $da['produksi']; ?></td>
                            <td><?= $da['produktivitas']; ?></td>
                            <td><?= $da['tahun']; ?></td>
                            <td><?= $da['kabupaten']; ?></td>
                            <?php
                        if ($this->session->userdata('role') == 1) {
                            ?>
                            <td>
                                <a class="btn btn-success" href="<?= base_url("DataAktualController/formEdit/" . $da['id']); ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="<?= base_url("DataAktualController/hapus/" . $da['id_input']); ?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                              <?php
                        }
                        ?>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>