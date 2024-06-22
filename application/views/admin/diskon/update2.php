<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ml-auto btn btn-primary btn-sm">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url("admin/diskon/update/") . $diskon->id_diskon ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label>Gambar Diskon</label>
                            <input type="file" name="gambar_diskon" data-default-file="<?= base_url('assets/img/diskon/') . $diskon->gambar_diskon ?>" class="dropify">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Diskon</label>
                            <textarea type="text" name="deskripsi_diskon" class="form-control" onkeydown="if(event.keyCode==13){event.preventDefault();document.getElementById('riwayat_servis').value += '\n';}"><?= $diskon->deskripsi_diskon ?></textarea>
                            <?php echo form_error('deskripsi_diskon', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>