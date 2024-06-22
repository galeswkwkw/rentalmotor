<div class="row">
	<div class="col-lg-12">
		<?php foreach ($detail as $dt) : ?>
			<div class="card">
				<div class="card-body">
					<div class="d-flex mb-3">
						<a href="javascript:history.back()" class="ms-auto btn btn-primary btn-sm" style="margin-left: auto!important;">- Kembali</a>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="mb-3">
								<img src="<?php echo base_url() . 'assets/img/motor/' . $dt->gambar ?>" alt="Gambar Motor" title="Gambar Motor" width="430px">
							</div>
							<div class="mb-3">
								<img src="<?php echo base_url() . 'assets/img/motor/' . $dt->gambar_kondisi ?>" alt="Gambar Motor" title="Gambar Kondisi Motor" width="430px">
							</div>
						</div>
						<div class="col-md-7">
							<table class="table">
								<tr>
									<td>Tipe Motor</td>
									<td>
										<?php echo $dt->kode_type ?>
									</td>
								</tr>
								<tr>
									<td>Merek</td>
									<td><?php echo $dt->merek ?></td>
								</tr>
								<tr>
									<td>Harga / Hari</td>
									<td>Rp. <?php echo number_format($dt->harga, 0, ',', '.') ?></td>
								</tr>

								<tr>
									<td>Denda / Hari</td>
									<td> Rp. <?php echo number_format($dt->denda, 0, ',', '.') ?></td>
								</tr>
								<tr>
									<td>Nomor Plat</td>
									<td><?php echo $dt->no_plat ?></td>
								</tr>
								<tr>
									<td>Warna</td>
									<td><?php echo $dt->warna ?></td>
								</tr>
								<tr>
									<td>Tahun</td>
									<td><?php echo $dt->tahun ?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>
										<?php
										if ($dt->status == "0") {
											echo "<span class='badge badge-danger'>Tidak Tersedia !</span>";
										} else {
											echo "<span class='badge badge-primary'>Tersedia:)</span>";
										}
										?>
									</td>
								</tr>
								<tr>
									<td>Kondisi Motor</td>
									<td><?php echo $dt->riwayat_servis ?></td>
								</tr>

							</table>

						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>