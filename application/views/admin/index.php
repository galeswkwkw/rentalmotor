<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-info-circle mr-3" style="font-size: 1.5rem;"></i>
                <div>
                    Halo <?= $users['nama_depan'] . " " . $users['nama_belakang'] ?>, Selamat Datang di Panel Admin.
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div>

	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Motor</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $motor ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-motorcycle fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Transaksi</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-random fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Paket Sewa
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $paket ?></div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-box fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelanggan
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pelanggan ?></div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa- fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!-- Pending Requests Card Example -->
<p>Data Transaksi</p>
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Transaksi Pending</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pendingTransaksi ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-adas shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dsd text-uppercase mb-1">
                            Transaksi Selesai</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $selesaiTransaksi ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Sedang Merental</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rentalTransaksi ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Terlambat</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $terlambatTransaksi ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
