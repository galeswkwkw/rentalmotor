<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="<?php echo base_url('admin/paket/tambah_paket') ?>" class="ml-auto btn btn-sm btn-primary"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Sewa</a>
                </div>
                <table class="table table-hover table-striped table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Deskripsi Paket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($paket_sewa as $mp) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $mp->nama_paket ?></td>
                                <td>Rp. <?php echo number_format($mp->harga_paket, 0, ',', '.') ?></td>
                                <td><?php echo $mp->deskripsi_paket ?></td>

                                <td>
                                    <a href="<?php echo base_url('admin/paket/update/') . $mp->id_paket ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <!-- <a class="btn btn-sm btn-danger" href="javascript:;" onclick="deleted('<?php echo base_url('admin/paket/delete_paket/' . $mp->id_paket) ?>')"><i class="fa fa-trash"></i></a> -->
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>