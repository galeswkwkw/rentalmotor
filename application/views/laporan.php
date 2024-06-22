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

?>
<center>
    <h1>Bukti Pemesanan</h1>
</center>
<table style="font-size: 20px;">
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
        <td>Harga/Hari</td>
        <td>:</td>
        <td>Rp. <?= number_format($rental['harga'], 0, ".", ".") ?></td>
    </tr>
    <tr>
        <td>Jumlah Hari Sewa</td>
        <td>:</td>
        <td><?= $jumlah_hari  ?></td>
    </tr>
</table>
