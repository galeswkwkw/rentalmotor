<?php

$tanggal_sewa = $rental['tanggal_rental'];
$tanggal_kembali = $rental['tanggal_kembali'];


// Membuat objek DateTime dari string tanggal
$tanggal_sewa_obj = new DateTime($tanggal_sewa);
$tanggal_kembali_obj = new DateTime($tanggal_kembali);

// Menghitung selisih antara dua tanggal
$selisih = $tanggal_sewa_obj->diff($tanggal_kembali_obj);

// Mengambil jumlah hari dari selisih
$jumlah_hari = $selisih->days;
$total = $rental['harga'] * $jumlah_hari - $rental['total_diskon'] / 100 + $rental['total_denda'] + $rental['harga_paket']+0;
?>
<center>
	<h1>Kris Rental Motor Semarang</h1>
    <h5>Bukti Penyewaan</h5>
</center>
    <table style="font-size: 20px; width:70%;">
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><?= $rental['nama_pelanggan'] ?></td>
        </tr>
        <tr>
            <td>Merek Motor</td>
            <td>:</td>
            <td><?= $rental['merek'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Sewa</td>
            <td>:</td>
            <td><?= $rental['tanggal_rental'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?= $rental['tanggal_kembali'] ?></td>
        </tr>
        <tr>
            <td>Jam Pengambilan</td>
            <td>:</td>
            <td><?= $rental['jam_pengambilan'] ?></td>
        </tr>
        <tr>
            <td>Harga/Hari</td>
            <td>:</td>
            <td>Rp. <?= number_format($rental['harga'], 0, ".", ".") ?></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td>Rp. <?= number_format($total, 0, ".", ".") ?></td>
        </tr>
        <tr>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?=  $jumlah_hari  ?></td>
        </tr>
    </table>
	<center>
		<p>-- <?= $rental['date_create'] ?> --</p>
	</center>
	<p>note*: Mohon pastikan nomor anda aktif satu jam sebelum pengambilan maupun pengembalian motor</p>
