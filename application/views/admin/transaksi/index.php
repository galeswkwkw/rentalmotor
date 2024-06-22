<?php 
function merubah_tanggal($tgl){
	$bulan = array (
		1=> 'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember',

	);
	$pecahkan = explode('-', $tgl);
	return $pecahkan[2] . ' ' . $bulan [(int)$pecahkan[1]]. ' '. $pecahkan[0];
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th>NIK</th>
                                <th>Nama Pelanggan</th>
                                <th>No Telepon</th>
                                <th>Tanggal Rental</th>
                                <th>Tanggal Kembali</th>
                                <th>Jam Pengambilan</th>
                                <th>Status Rental</th>
                                <th width="200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($transaksi as $tp) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tp->nik ?></td>
                                    <td><?php echo $tp->nama_pelanggan ?></td>
                                    <td><?php echo $tp->no_telepon ?></td>
                                    <td><?php echo merubah_tanggal ($tp->tanggal_rental) ?></td>
                                    <td><?php echo merubah_tanggal ($tp->tanggal_kembali) ?></td>
                                    
                                    <td><?php echo $tp->jam_pengambilan ?></td>
                                    <td>
                                        <?php
                                        if ($tp->status_rental == 0) {
                                            $s = '<span class="badge badge-warning">Pending</span>';
                                        ?>
                                            <span class="badge badge-warning">Pending</span>
                                        <?php
                                        } elseif ($tp->status_rental == 1) {
                                            $s = '<span class="badge badge-success">Sedang Merental</span>';
                                        ?>
                                            <span class="badge badge-success">Sedang Merental</span>
                                        <?php
                                        } elseif ($tp->status_rental == 2) {
                                            $s = '<span class="badge badge-danger">Ditolak</span>';
                                        ?>
                                            <span class="badge badge-danger">Ditolak</span>
                                        <?php
                                        } elseif ($tp->status_rental == 3) {
											
                                            $s = '<span class="badge badge-secondary">Selesai</span>';
                                        ?>
                                            <span class="badge badge-secondary">Selesai</span>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/transaksi/detail/') . $tp->id_rental ?>" class="btn btn-sm btn-success" ml-md-3><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#aksi<?= $tp->id_rental ?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="javascript:;" onclick="deleted('<?php echo base_url('admin/transaksi/delete/' . $tp->id_rental) ?>')"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                                <div class="modal fade" id="aksi<?= $tp->id_rental ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aksi Rental</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/transaksi/aksi/') . $tp->id_rental ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label for="">Status Motor : <?php
                                                                                            if ($tp->status == 0) {
                                                                                            ?>
                                                                    <span class="badge badge-danger">Tidak Tersedia.</span>
                                                                <?php
                                                                                            } elseif ($tp->status == 1) {
                                                                ?>
                                                                    <span class="badge badge-primary">Tersedia</span>
                                                                <?php
                                                                                            } elseif ($tp->status == 3) {
                                                                ?>
                                                                    <span class="badge badge-warning">Sedang Di Rental</span>
                                                                <?php
                                                                                            }
                                                                ?></label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="">Status Rental :
                                                                <?= $s ?>
                                                            </label>
                                                        </div>

                                                        <?php
                                                        if ($tp->status_rental == 1 || $tp->status_rental == 3) {
                                                        ?>
                                                            <div class="col-lg-12">
                                                                <label for="">Tanggal Pengambilan :
                                                                    <?= $tp->tanggal_rental . " " . $tp->jam_pengambilan; ?>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label for="">Tanggal Pengembalian :
                                                                    <?= $tp->tanggal_kembali . " " . $tp->jam_pengambilan; ?>
                                                                </label>
                                                            </div>
                                                        <?php
                                                        }
                                                        if ($tp->status_rental == 3) {
                                                        ?>
                                                            <div class="col-lg-12">
                                                                <label for="">Waktu dikembalikan :
                                                                    <?= $tp->waktu_dikembalikan ?>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label for="">Terlambat :
                                                                    <?= $tp->terlambat ?> Hari x Rp. <?= number_format($tp->denda); ?>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label for="">Total Denda :
                                                                    Rp. <?= number_format($tp->total_denda); ?>
                                                                </label>
                                                            </div>
                                                        <?php
                                                        }
                                                        if ($tp->status_rental != 3 && $tp->status_rental != 2) {
                                                        ?>
                                                            <div class="col-lg-12">
                                                                <label for=""><strong>Update Status Rental</strong></label>
                                                                <select name="status_rental" id="aksi<?= $tp->id_rental ?>" class="form-control" required>
                                                                    <option value=""> - Pilih - </option>
                                                                    <?php
                                                                    if ($tp->status_rental == 0) {
                                                                    ?>
                                                                        <option value="1">Terima</option>
                                                                        <option value="2">Tolak</option>
                                                                    <?php
                                                                    } elseif ($tp->status_rental == 1) {
                                                                    ?>
                                                                        <option value="3">Selesai</option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <?php
                                                    if ($tp->status_rental != 3) {
                                                    ?>
                                                        <button class="btn btn-primary">OK</button>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
