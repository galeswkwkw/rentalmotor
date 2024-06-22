<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a href="javascript:history.back()" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">- Kembali</a>
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        <h4>Data Pembayaran</h4>
                        <table class="table">
                            <tr>
                                <td>Jenis Pembayaran</td>
                                <td>
                                    <?php if ($detail['id_rekening'] != null) echo "Transfer";
                                    else echo "Tunai"; ?>
                                </td>
                            </tr>
                            <tr>
                                <?php
                                if ($detail['bukti_pembayaran'] != null) {
                                ?>
                                    <td>Transfer Ke Rekening</td>
                                    <td><?= $detail['nama_bank'] . " - " . $detail['nomor_rekening'] . " A/n " . $detail['nama_rekening'] ?></td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                if ($detail['bukti_pembayaran'] != null) {
                                ?>
                                    <td>
                                        <label for="">Bukti Pembayaran</label>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . 'assets/img/transaksi/' . $detail['bukti_pembayaran'] ?>" target="_blank">Lihat</a>
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-7">
                        <h4>Data Pelanggan</h4>
                        <table class="table">
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>
                                    <?php echo $detail['nama_pelanggan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>
                                    <?php echo $detail['nik'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>
                                    <?php echo $detail['no_telepon'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar SIM</td>
                                <td>
                                    <a href="<?php echo base_url() . 'assets/img/transaksi/' . $detail['foto_sim'] ?>" target="_blank">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar KTP</td>
                                <td>
                                    <a href="<?php echo base_url() . 'assets/img/transaksi/' . $detail['ktp'] ?>" target="_blank">Lihat</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <h4>Data Sewa</h4>
                        <table class="table">
                            
                            <tr>
                                <td>Tanggal Sewa</td>
                                <td>
                                    <?php echo $detail['tanggal_rental'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Kembali</td>
                                <td><?php echo $detail['tanggal_kembali'] ?></td>
                            </tr>
                            <?php
                            if ($detail['id_paket'] != null) {
                            ?>
                                <tr>
                                    <td>Paket</td>
                                    <td><?= $detail['nama_paket'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            if ($detail['status_rental'] == 1 || $detail['status_rental'] == 3) {
                            ?>
                                
                            <?php
                            }
                            if ($detail['status_rental'] == 3) {
                            ?>
                                <tr>
                                    <td>
                                        Tanggal Pengembalian
                                    </td>
                                    <td><?= $detail['waktu_dikembalikan'] ?></td>
                                </tr>
                                <?php
                                if ($detail['waktu_dikembalikan'] > $detail['tanggal_pengembalian']) {
                                ?>
                                    <tr>
                                        <td>
                                            Terlambat
                                        </td>
                                        <td><?= $detail['terlambat'] ?> Hari x Rp. <?= number_format($detail['denda']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Total Denda
                                        </td>
                                        <td>Rp. <?= number_format($detail['total_denda']); ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-7">
                        <?php
                        if ($detail['status_rental'] != 3) {
                        ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('admin/transaksi/aksi/') . $detail['id_rental'] ?>" method="POST">
                                        <h4>Aksi Sewa</h4>
                                        <?php
                                        if ($detail['status_rental'] != 3 && $detail['status_rental'] != 2) {
                                        ?>
                                            <label for=""><strong>Update Status Sewa</strong></label>
                                            <select name="status_rental" id="aksi" class="form-control" required>
                                                <option value=""> - Pilih - </option>
                                                <?php
                                                if ($detail['status_rental'] == 0) {
                                                ?>
                                                    <option value="1">Terima</option>
                                                    <option value="2">Tolak</option>
                                                <?php
                                                } elseif ($detail['status_rental'] == 1) {
                                                ?>
                                                    <option value="3">Selesai</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="hidden" name="tanggal_pengambilan" value="<?= $detail['tanggal_rental'] . " " . date("H:i:s"); ?>" id="tanggal_pengambilan" class="tanggal_pengambilan">
                                            <input type="hidden" name="tanggal_pengembalian" value="<?= $detail['tanggal_kembali'] . " " . date("H:i:s"); ?>" id="tanggal_pengembalian" class="tanggal_pengembalian">
                                        <?php
                                        }
                                        ?>
                                        <small class="text-danger mb-2" id="alerts"></small><br>
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
			<div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <br><br>
                                <img src="<?php echo base_url() . 'assets/img/motor/' . $detail['gambar'] ?>" alt="" width="430px">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Data Motor</h4>
                                <table class="table">
                                    <tr>
                                        <td>Tipe Motor</td>
                                        <td>
                                            <?php echo $detail['kode_type'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Merek</td>
                                        <td><?php echo $detail['merek'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga / Hari</td>
                                        <td>Rp. <?php echo number_format($detail['harga'], 0, ',', '.') ?></td>
                                    </tr>

                                    <tr>
                                        <td>Denda / Jam</td>
                                        <td> Rp. <?php echo number_format($detail['denda'], 0, ',', '.') ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Plat</td>
                                        <td><?php echo $detail['no_plat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td><?php echo $detail['warna'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td><?php echo $detail['tahun'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <?php
                                            if ($detail['status'] == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia !</span>";
                                            } elseif ($detail['status'] == "1") {
                                                echo "<span class='badge badge-primary'>Tersedia:)</span>";
                                            } elseif ($detail['status'] == "3") {
                                                echo "<span class='badge badge-warning'>Sedang di rental</span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Servis</td>
                                        <td><?php echo $detail['riwayat_servis'] ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
