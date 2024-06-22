<style>
    td,
    th {
        padding: 3px;
    }
</style>
<center>
    <h1>Kris Rental Motor Semarang</h1>
	<p>Jl. Cilosari No.82, Bugangan, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50126<p>
	<p>telp. +62 813-1980-8398<p>
		<p>--------------------------------------------------------------------------------------------------------------------------------------</p>
		
	</center>
	
<p>Laporan Total<p>
<p>Dari Tanggal : <?= $dari_tanggal ?></p>
<p>Sampai Tanggal : <?= $sampai_tanggal ?></p>
<table style="font-size: 12px; width:100% !important; border-collapse:collapse;" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Merek Motor</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>NIK</th>
            <th>No Telepon</th>
            <th>Total Denda</th>
            <th>Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $total = 0;
        foreach ($sql as $row) :
            $tanggal_sewa = $row->tanggal_rental;
            $tanggal_kembali = $row->tanggal_kembali;

            // Membuat objek DateTime dari string tanggal
            $tanggal_sewa_obj = new DateTime($tanggal_sewa);
            $tanggal_kembali_obj = new DateTime($tanggal_kembali);

            // Menghitung selisih antara dua tanggal
            $selisih = $tanggal_sewa_obj->diff($tanggal_kembali_obj);

            // Mengambil jumlah hari dari selisih
            $jumlah_hari = $selisih->days;

            if ($row->id_paket != null) {
            } else {
                $row->harga_paket = 0;
            }

            $harga = $row->harga * $jumlah_hari - $row->total_diskon / 100 + $row->total_denda + $row->harga_paket;
            $total += $harga;
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row->nama_pelanggan ?></td>
                <td><?= $row->merek ?></td>
                <td><?= $row->tanggal_pengambilan ?></td>
                <td><?= $row->waktu_dikembalikan ?></td>
                <td><?= $row->nik ?></td>
                <td><?= $row->no_telepon ?></td>
                <td>Rp. <?= number_format($row->total_denda, 0, ".", ".") ?></td>
                <td>Rp. <?= number_format($harga, 0, ".", ".") ?></td>
            </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8" style="text-align: right; padding-right:10%;"><strong>Total Pendapatan :</strong></td>
            <td><strong>Rp. <?= number_format($total, 0, ".", ".") ?></strong></td>
        </tr>
    </tfoot>
</table>
