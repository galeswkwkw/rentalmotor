<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url('admin/rekening/update/') . $tp->id_rekening ?>">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="hidden" name="id_rekening" value="<?php echo $tp->id_rekening ?>">
                        <input type="text" name="nama_bank" class="form-control" value="<?php echo $tp->nama_bank ?>">
                        <?php echo form_error('nama_bank', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" name="nomor_rekening" class="form-control" value="<?php echo $tp->nomor_rekening ?>">
                        <?php echo form_error('nomor_rekening', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Rekening</label>
                        <input type="text" name="nama_rekening" class="form-control" value="<?php echo $tp->nama_rekening ?>">
                        <?php echo form_error('nama_rekening', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>