<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                    </div>
                    <form class="user" action="<?= base_url('auth/register') ?>" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="nama_depan" name="nama_depan" value="<?= set_value('nama_depan') ?>" placeholder="Nama Depan">
                                <?= form_error('nama_depan', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="nama_belakang" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" placeholder="Nama Belakang">
                                <?= form_error('nama_belakang', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="alamat_email" name="alamat_email" value="<?= set_value('alamat_email') ?>" placeholder="Alamat Email">
                            <?= form_error('alamat_email', '<small class="text-danger pl-2">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nomor_telp" name="nomor_telp" value="<?= set_value('nomor_telp') ?>" oninput="validasiInput(this)" placeholder="Nomor Telpon">
                            <?= form_error('nomor_telp', '<small class="text-danger pl-2">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('auth') ?>">Sudah mempunyai akun? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>