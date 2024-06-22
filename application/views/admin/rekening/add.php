<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ml-auto btn btn-primary btn-sm">- Kembali</a>
                </div>
                <form method="POST" action="<?php echo base_url('admin/rekening/add') ?>">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" class="form-control">
                        <?php echo form_error('nama_bank', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" name="nomor_rekening" class="form-control">
                        <?php echo form_error('nomor_rekening', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Rekening</label>
                        <input type="text" name="nama_rekening" class="form-control">
                        <?php echo form_error('nama_rekening', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>