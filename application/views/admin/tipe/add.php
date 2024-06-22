<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ml-auto btn btn-primary btn-sm">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url('admin/tipe/add') ?>">
                    <div class="form-group">
                        <label>Kode Tipe</label>
                        <input type="text" name="kode_type" class="form-control">
                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Tipe</label>
                        <input type="text" name="nama_type" class="form-control">
                        <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>