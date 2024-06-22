<style>
    .btn-primary.active {
        background-color: #28a745;
        /* Warna latar belakang ketika tombol aktif (on) */
        border-color: #28a745;
        /* Warna border ketika tombol aktif (on) */
    }

    .btn-primary:not(.active) {
        background-color: #dc3545;
        /* Warna latar belakang ketika tombol tidak aktif (off) */
        border-color: #dc3545;
        /* Warna border ketika tombol tidak aktif (off) */
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ml-auto btn btn-primary btn-sm">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url("admin/diskon/update/") ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label>Gambar Diskon</label>
                            <input type="file" name="gambar_diskon" data-default-file="<?= base_url('assets/img/diskon/') . $diskon['gambar_diskon'] ?>" class="dropify">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Diskon</label>
                            <textarea type="text" name="deskripsi_diskon" class="form-control" onkeydown="if(event.keyCode==13){event.preventDefault();document.getElementById('riwayat_servis').value += '\n';}"><?= $diskon['deskripsi_diskon'] ?></textarea>
                            <?php echo form_error('deskripsi_diskon', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Nilai Diskon %</label>
                            <input type="number" name="nilai_diskon" value="<?= $diskon['nilai_diskon'] ?>" class="form-control" max="100" id="">
                            <?php echo form_error('nilai_diskon', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Status Diskon</label><br>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="status_diskon" id="option1" value="1" autocomplete="off" <?php if($diskon['status_diskon'] == 1){echo "checked";} ?> > Aktif
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="status_diskon" id="option2" value="0" autocomplete="off" <?php if($diskon['status_diskon'] == 0){echo "checked";} ?> > Nonaktif
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>