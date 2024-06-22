<div class="card">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url("admin/motor/update/") . $mb->id_motor ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tipe motor</label>
						<select name="kode_type" class="form-control">
							<option value="">--Pilih Tipe Motor--</option>
							<?php foreach ($type as $tp) : ?>;
								<option <?php if (set_value('kode_type', $mb->kode_type) == $tp->kode_type) echo "selected"; ?> value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?> </option>
							<?php endforeach; ?>
						</select>
						<?php echo form_error('kode_type', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Warna</label>
						<input type="text" name="warna" value="<?= set_value('warna', $mb->warna) ?>" class="form-control">
						<?php echo form_error('warna', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Merek</label>
						<input type="text" name="merek" value="<?= set_value('merek', $mb->merek) ?>" class="form-control">
						<?php echo form_error('merek', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tahun</label>
						<input type="integer" name="tahun" value="<?= set_value('tahun', $mb->tahun) ?>" class="form-control">
						<?php echo form_error('tahun', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Harga/Hari</label>
						<input type="text" name="harga" value="<?= set_value('harga', $mb->harga) ?>" class="form-control">
						<?php echo form_error('harga', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Status</label>
						<select name="status" class="form-control">
							<option value="">--Pilih Status--</option>
							<option <?php if (set_value('status', $mb->status) == 1) echo "selected"; ?> value="1">Tersedia</option>
							<option <?php if (set_value('status', $mb->status) == 0) echo "selected"; ?> value="0">TIdak Tersedia</option>
							<option <?php if (set_value('status', $mb->status) == 2) echo "selected"; ?> value="2">Lainnya</option>
						</select>
						<?php echo form_error('status', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Denda/Hari</label>
						<input type="text" name="denda" value="<?= set_value('denda', $mb->denda) ?>" class="form-control">
						<?php echo form_error('denda', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>No. Plat</label>
						<input type="text" name="no_plat" value="<?= set_value('no_plat', $mb->no_plat) ?>" class="form-control">
						<?php echo form_error('no_plat', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" data-default-file="<?= base_url('assets/img/motor/') . $mb->gambar ?>" class="dropify">
						<?php echo form_error('gambar', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label>Kondisi Motor</label>
						<textarea name="riwayat_servis" class="form-control" onkeydown="if(event.keyCode==13){event.preventDefault();document.getElementById('riwayat_servis').value += '\n';}"><?= $mb->riwayat_servis ?></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label>Kondisi Motor</label>
						<input type="file" name="gambar_kondisi" data-default-file="<?= base_url('assets/img/motor/') . $mb->gambar_kondisi ?>" class="dropify">
						<?php echo form_error('gambar_kondisi', '<div class ="text-small text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 d-flex">
					<button type="submit" class="btn btn-primary m-1">Simpan</button>
					<button type="reset" class="btn btn-danger m-1">Reset</button>
				</div>
			</div>
		</form>
	</div>
</div>
