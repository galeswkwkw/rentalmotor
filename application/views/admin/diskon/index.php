<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="<?php echo base_url('admin/diskon/update') ?>" class="ml-auto btn btn-primary btn-sm">Edit Diskon</a>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <img src="<?= base_url('assets/img/diskon/') . $diskon['gambar_diskon'] ?>" width="100%" alt="">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h3><?= $diskon['deskripsi_diskon'] ?></h3>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <p><strong>Nilai Diskon <?= $diskon['nilai_diskon'] ?>%</strong></p>
                        <small class="text-danger">Status * <?php if($diskon['status_diskon'] == 1) echo "Aktif"; else echo "Nonaktif"; ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>