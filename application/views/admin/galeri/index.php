<div class="d-flex mb-3">
    <a href="#" data-toggle="modal" data-target="#add" class="ml-auto btn btn-primary">+ Galeri Testimoni</a>
</div>
<div class="row">
    <?php
    foreach ($galeri as $row) {
    ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= base_url('assets/img/galeri/') . $row->gambar ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <button type="button" class="btn btn-danger" onclick="deleted('<?= base_url('admin/galeri/delete/') . $row->id ?>')">Hapus</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Galeri Testimoni</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin/galeri') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="dropify" id="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>