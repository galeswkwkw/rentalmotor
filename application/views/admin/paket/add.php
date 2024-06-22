<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ml-auto btn btn-sm btn-primary">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url('admin/paket/tambah_paket') ?>">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" name="nama_paket" class="form-control">
                        <?php echo form_error('nama_paket', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Harga Paket</label>
                        <input type="text" name="harga_paket" class="form-control">
                        <?php echo form_error('harga_paket', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Paket</label>
                        <input type="text" name="deskripsi_paket" class="form-control">
                        <?php echo form_error('deskripsi_paket', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>
        </div>
    </div>
</div>