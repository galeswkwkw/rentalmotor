<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url('admin/tipe/update/') . $tp->id_type ?>">
                    <div class="form-group">
                        <label>Kode Tipe</label>
                        <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                        <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Tipe</label>
                        <input type="text" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                        <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>