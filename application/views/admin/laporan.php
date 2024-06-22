<div class="row">
    <div class="col-lg-12">
	Cetak Laporan Selesai
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("admin/laporan/export") ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="dari_tanggal" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name="sampai_tanggal" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </div>
                </form>
				
            </div>

        </div><br>
		Cetak Laporan Sedang Menyewa
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("admin/laporan/exportsewa") ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="dari_tanggal" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name="sampai_tanggal" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </div>
                </form>
				
            </div>

        </div>
		Cetak Laporan Pending
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("admin/laporan/exportpending") ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="dari_tanggal" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name="sampai_tanggal" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </div>
                </form>
				
            </div>

        </div>
		Cetak Laporan Total
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("admin/laporan/exporttotal") ?>" enctype="multipart/form-data">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="dari_tanggal" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name="sampai_tanggal" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </div>
                </form>
				
            </div>

        </div>
    </div>
</div>
