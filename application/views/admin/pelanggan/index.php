<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered no-wrap" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Nomor Telepon</th>
                                <th>Nik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($transaksi as $row) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
									
                                    <td><?php echo $row->nama_pelanggan?></td>
                                    <td><?php echo $row->no_telepon ?></td>
                                    <td><?php echo $row->nik ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
