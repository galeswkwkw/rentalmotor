<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="<?php echo base_url('admin/rekening/add') ?>" class="ml-auto btn btn-primary btn-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Rekening</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th>Nama Bank</th>
                                <th>Nomor Rekenig</th>
                                <th>Nama Rekenig</th>
                                <th width="200px">Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($rekening as $tp) :    ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tp->nama_bank ?></td>
                                    <td><?php echo $tp->nomor_rekening ?></td>
                                    <td><?php echo $tp->nama_rekening ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url('admin/rekening/update/' . $tp->id_rekening) ?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" href="javascript:;" onclick="deleted('<?php echo base_url('admin/rekening/delete/' . $tp->id_rekening) ?>')"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>