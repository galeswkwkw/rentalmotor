<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="<?= base_url('admin/motor/add') ?>" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">+ Data Motor</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered no-wrap" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Tipe</th>
                                <th>Merek</th>
                                <th>Harga / Hari</th>
                                <th>No. Plat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($motor as $mb) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td>
                                        <img width="60px" src="<?php echo base_url() . 'assets/img/motor/' . $mb->gambar ?>">
                                    </td>
                                    <td><?php echo $mb->kode_type ?></td>
                                    <td><?php echo $mb->merek ?></td>
                                    <td>Rp. <?php echo number_format(intval($mb->harga), 0, ',', '.') ?></td>
                                    <td><?php echo $mb->no_plat ?></td>
                                    <td><?php
                                        if ($mb->status == "0") {
                                            echo " <span class=' badge badge-danger'>Tidak Tersedia</span>";
                                        } else {
                                            echo " <span class=' badge badge-primary'>Tersedia</span>";
                                        }
                                        ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/motor/detail/') . $mb->id_motor ?>" class="btn btn-sm btn-success" ml-md-3><i class="fas fa-eye"></i></a>
                                        
                                        <a href="<?php echo base_url('admin/motor/update/') . $mb->id_motor ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
