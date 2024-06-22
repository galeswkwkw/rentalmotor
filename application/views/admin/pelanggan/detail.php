<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">- Kembali</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped" style="width: 50% !important;">
                            <tr>
                                <td style="width: 149px !important;">Nama Depan</td>
                                <td style="width: 1px !important;">:</td>
                                <td>
                                    <?= $detail->nama_depan ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 149px !important;">Nama Belakang</td>
                                <td style="width: 1px !important;">:</td>
                                <td>
                                    <?= $detail->nama_belakang ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 149px !important;">Username</td>
                                <td style="width: 1px !important;">:</td>
                                <td>
                                    <?= $detail->username ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 149px !important;">Alamat Email</td>
                                <td style="width: 1px !important;">:</td>
                                <td>
                                    <?= $detail->alamat_email ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 149px !important;">Nomor Telepon</td>
                                <td style="width: 1px !important;">:</td>
                                <td>
                                    <?= $detail->nomor_telp ?>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>