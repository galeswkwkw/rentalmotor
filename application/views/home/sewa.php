<header class="py-5 bgku">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Penyewaan Motor</h1>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container">
        <form method="POST" action="<?php echo base_url('home/sewa/') . $detail['id_motor'] ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header">
                            Form Sewa Motor
							
							<div> </div>
                        </div>
						
                        <div class="card-body">

                            <div class="form-group py-2">
                                <label class="px-2">Nama *</label>
                                <input type="text" required name="nama_pelanggan" class="form-control" placeholder="Masukkan nama sesuai KTP">
                            </div>
                            <div class="form-group py-2">
								<label class="px-2">Nomor Induk Kependudukan *</label>
                                <input type="number" min="0" max="9999999999999999" required name="nik" class="form-control" placeholder="Masukkan NIK" oninput="validateNIK(this)">
								<div id="error-message" style="color: red;"></div>
                            </div>
							<div class="form-group py-2">
								<label class="px-2">Foto Ktp *</label>
								<input type="file" required name="ktp" class="form-control" placeholder="Pastikan foto KTP jelas">
							</div>
							<div class="form-group py-2">
								<label class="px-2">No Telepon *</label>
								<input type="number" required name="no_telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
								<div id="error-messages" style="color: red;"></div>
							</div>

                            <div class="form-group py-2">
                                <label class="px-2">Tanggal Sewa *</label>
                                <input type="date" required name="tanggal_rental" onchange="hitungTotal()" id="tanggal_sewa" class="form-control">
								

                            </div>
                            <div class="form-group py-2">
                                <label class="px-2">Jam Pengambilan *</label>
                                <input type="time" required name="jam_pengambilan" id="jam_pengambilan" class="form-control">
                            </div>
							
                            <div class="form-group py-2">
                                <label class="px-2">Tanggal Kembali *</label>
                                <input type="date" required name="tanggal_kembali" onchange="hitungTotal()" id="tanggal_pengembalian" class="form-control">
                            </div>
                            <div class="form-group py-2">
                                <label class="px-2">Paket Sewa *</label>
                                <select name="id_paket" onchange="hitungTotal()" id="paket_tambahan" class="form-control">
                                    <option value="0" selected>--Pilih Paket Sewa--</option>
                                    <?php foreach ($paket_sewa as $mp) : ?>
                                        <option value="<?php echo $mp->id_paket ?>" data-harga="<?= $mp->harga_paket ?>"><?php echo $mp->deskripsi_paket ?> (Rp. <?= number_format($mp->harga_paket, 0, ".", ".") ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label class="px-2">Tempat Pengambilan Motor *</label>
                                <select name="a" id="pengambilan" class="form-control">
                                    <option value="">--Pilih --</option>
                                    <option value="1">Kantor</option>
                                    <option value="2">Antar Alamat + Rp. 20.000</option>
                                </select>
                                <div id="tempat_pengambilans"></div>
                                <input type="hidden" name="harga_ambil" id="harga_ambil" value="0">
                            </div>
                            <div class="form-group py-2">
                                <label class="px-2">Tempat Mengembalikan Motor *</label>
                                <select name="a" id="mengembalikan" class="form-control">
                                    <option value="">--Pilih --</option>
                                    <option value="1">Kantor</option>
                                    <option value="2">Jemput Alamat + Rp. 20.000</option>
                                </select>
                                <div id="tempat_mengembalikans"></div>
                                <input type="hidden" name="harga_balikan" id="harga_balikan" value="0">
                            </div>
                            <div class="form-group py-2">
                                <label class="px-2">Foto SIM Aktif *</label>
                                <input type="file" required name="foto_sim" class="form-control" placeholder="Pastikan anda SIM aktif">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    Informasi Sewa Motor
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group py-2">
                                                <label class="px-2">Harga Sewa / Hari</label>
                                                <input type="hidden" name="id_motor" value="<?php echo $detail['id_motor'] ?>">
                                                <input type="text" name="harga" class="form-control" id="harga_sewa" value="<?= $detail['harga'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group py-2">
                                                <label class="px-2">Diskon</label>
                                                <input type="hidden" name="diskon" value="<?php echo $diskon['nilai_diskon'] ?>">
                                                <input type="text" class="form-control" id="harga_sewa" value="<?= $diskon['nilai_diskon'] ?>%" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group py-2">
                                                <label class="px-2">Denda / Hari</label>
                                                <input type="text" name="denda" class="form-control" value="Rp. <?php echo number_format($detail['denda'], 0, ',', '.') ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group py-2">
                                            <label class="px-2">Total</label>
                                            <input type="text" readonly id="total" class="form-control" placeholder="Rp. 0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    Pembayaran
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div id="alerts"></div>
                                            <div class="form-group">
                                                <label class="px-2">Jenis Pembayaran</label>
                                                <select required name="jenis_pembayaran" id="jenis_pembayaran" onchange="pembayaran()" class="form-control" required>
                                                    <option value="">- Pilih -</option>
                                                    <option value="Tunai">Tunai</option>
                                                    <option value="Transfer">Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="detail-pembayaran" class="col-md-12 mb-2">

                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-warning" id="sewaButton">Sewa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<style>
    .shadow {
        box-shadow: 0 0 10px rgba(0.1, 1, 1, 0.1);
    }
</style>

<script>
function tanggal_rental() {
    const tanggalInput = document.getElementById('tanggal_sewa');
    const formattedDateElement = document.getElementById('formatted-date');
    
    const tanggalValue = tanggalInput.value;
    const parts = tanggalValue.split('-'); // Memisahkan tahun, bulan, dan tanggal
    
    const day = parts[2];
    const month = parts[1];
    const year = parts[0].slice(-2); // Mengambil dua digit terakhir tahun
    
    const formattedDate = `${day} ${month} ${year}`;
    formattedDateElement.textContent = formattedDate;
    
    // Lanjutkan dengan perhitungan total atau tindakan lain yang diperlukan
}
</script>

<script>
function validateNotelepon(input) {
    const no_telepon = input.value;
    const errorMessage = document.getElementById('error-messages');

    if (no_telepon.length !== 12) {
        errorMessage.textContent = 'Jumlah no telepon harus 12';
    } else {
        errorMessage.textContent = '';
    }
}
</script>

<script>
function validateNIK(input) {
    const nik = input.value;
    const errorMessage = document.getElementById('error-message');

    if (nik.length !== 16) {
        errorMessage.textContent = 'Jumlah angka harus 16';
    } else {
        errorMessage.textContent = '';
    }
}
</script>

<script>
    document.getElementById('pengambilan').addEventListener('change', tempat_pengambilan);
    var ambil = 0;

    function tempat_pengambilan() {
        var pengambilan = document.getElementById('pengambilan').value;
        var tempatDiv = document.getElementById("tempat_pengambilans");

        // Clear the div content before adding new elements
        tempatDiv.innerHTML = "";

        if (pengambilan === '2') {
            var input = document.createElement("input");
            var ambil = 20000;
            input.className = "form-control";
            input.name = "tempat_pengambilan";
            input.placeholder = "Masukkan Alamat";
            tempatDiv.appendChild(input);
            document.getElementById('harga_ambil').value = "20000"
        } else {
            document.getElementById('harga_ambil').value = "0"
        }
        hitungTotal();
    }
    document.getElementById('mengembalikan').addEventListener('change', tempat_mengembalikan);
    var balikin = 0;

    function tempat_mengembalikan() {
        var mengembalikan = document.getElementById('mengembalikan').value;
        var tempatDiv = document.getElementById("tempat_mengembalikans");

        // Clear the div content before adding new elements
        tempatDiv.innerHTML = "";

        if (mengembalikan === '2') {
            var input = document.createElement("input");
            var balikin = 20000;
            input.className = "form-control";
            input.name = "tempat_mengembalikan";
            input.placeholder = "Masukkan Alamat";
            tempatDiv.appendChild(input);
            document.getElementById('harga_balikan').value = "20000"
        } else {
            document.getElementById('harga_balikan').value = "0"
        }
        hitungTotal();
    }
</script>
<script>
    function hitungTotal() {
        const tanggalSewa = new Date(document.getElementById("tanggal_sewa").value);
        const tanggalPengembalian = new Date(document.getElementById("tanggal_pengembalian").value);
        const hargaSewaPerHari = parseFloat(document.getElementById("harga_sewa").value);
        const idPaketTambahan = document.getElementById("paket_tambahan").value;
        const hargaPaketTambahan = idPaketTambahan === "0" ? 0 : parseFloat(document.getElementById("paket_tambahan").options[document.getElementById("paket_tambahan").selectedIndex].getAttribute('data-harga'));
        const diskon = <?= $diskon['nilai_diskon'] ?>;
        // Perhitungan jumlah hari sewa
        const oneDay = 24 * 60 * 60 * 1000; // Satu hari dalam milidetik
        const selisihHari = Math.round(Math.abs((tanggalPengembalian - tanggalSewa) / oneDay));
        const harga_ambil = parseFloat(document.getElementById('harga_ambil').value);
        const harga_balikan = parseFloat(document.getElementById('harga_balikan').value);


        // Perhitungan total harga
        const totalSebelumDiskon = (selisihHari * hargaSewaPerHari) + (hargaPaketTambahan) + (harga_ambil + harga_balikan);
        const nilaiDiskon = (diskon / 100) * totalSebelumDiskon;
        const total = totalSebelumDiskon - nilaiDiskon;
        document.getElementById("total").value = total;
    }
</script>

<script>
    function pembayaran() {
        var jenis = document.getElementById('jenis_pembayaran').value;
        if (jenis == 'Transfer') {
            var col = document.getElementById("detail-pembayaran");

            var label = document.createElement("label");
            label.innerHTML = "Pilih Bank";
            col.appendChild(label);

            var select = document.createElement("select");
            select.name = "bank"
            select.id = "get-bank"
            select.className = "form-control"
            select.setAttribute("onchange", "tampilTransfer()");
            col.appendChild(select);

            var option = document.createElement("option");
            option.text = "- Pilih Bank -";
            option.value = "";
            select.appendChild(option);

            var label = document.createElement("label");
            label.innerHTML = "Bukti Transfer";
            col.appendChild(label);

            var bukti = document.createElement("input");
            bukti.type = "file"
            bukti.className = "dropify"
            bukti.name = "bukti"
            bukti.id = "bukti"
            bukti.required = true;
            col.appendChild(bukti);

            <?php
            $rekening = $this->db->get('rekening_pembayaran')->result();
            $i = 1;
            foreach ($rekening as $row) :
            ?>
                var option<?= $i ?> = document.createElement("option");
                option<?= $i ?>.text = "<?= $row->nama_bank ?>";
                option<?= $i ?>.value = "<?= $row->id_rekening ?>";
                select.appendChild(option<?= $i ?>);
            <?php
                $i++;
            endforeach;
            ?>
        } else {
            document.getElementById("detail-pembayaran").innerHTML = "";
            document.getElementById("alerts").innerHTML = '';
        }
    }
</script>

<script>
    var rekening = new Array();
    <?php foreach ($rekening as $row) : ?>
        rekening['<?= $row->id_rekening ?>'] = {
            nama_bank: '<?= $row->nama_bank ?>',
            nomor_rekening: '<?= $row->nomor_rekening ?>',
            atas_nama: '<?= $row->nama_rekening ?>'
        };
    <?php endforeach;  ?>

    function tampilTransfer() {
        var div = document.getElementById("detail-pembayaran");
        var e = document.getElementById('get-bank');
        var value = e.options[e.selectedIndex].value;

        console.log(value)
        document.getElementById("alerts").innerHTML = '<div class="alert alert-info" role="alert">' + 'Silahkan Transfer Ke Bank Tujuan <strong>' + rekening[value].nama_bank + '</strong> dengan Nomor Rekening <strong>' + rekening[value].nomor_rekening + '</strong> A/n <strong>' + rekening[value].atas_nama + '</strong> Sesuai Nominal yang ada pada informasi diatas.</div>';


    }
</script>
<script>


<style>
	.bgku{
		background-color: #000000;
		background-image: url('assets/semarang3.jpg');
		
		
		
	}
</style>
