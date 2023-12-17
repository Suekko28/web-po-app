<html>

<head>
	<title>Surat Penawaran - <?= $peralatan[0]['pengajuan_id']?></title>
</head>

<body>
	<style>
		.text-size-30 {
			font-size: 30px;
		}

		.users-label {
			padding: 5px;
			height: 30px;
			width: 200px;
			font-size: 25px;
		}

		.users-data {
			padding: 5px;
			height: 30px;
			width: 400px;
			font-size: 25px;
		}

		.users-data-head {
			padding: 5px;
			height: 30px;
			width: 300px;
			font-size: 25px;
			text-align: center;
		}

		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
	<div style="text-align: center;">
        <img src="https://www.murgana.co.id/images/Icon.png" height="70px" alt="">
		<h4 style="margin-top: 20px;">Jasa Pemeriksaan K3 – Consultant Lingkungan – General Supplier</h4>
	</div>
	<hr>
	<div style="text-align: justify; margin-top:10px; margin-left:11px;">
        Tanggal : <?= date('d F Y', strtotime($peralatan[0]['updated_at']))?> <br>
        Nomor   : <?= $peralatan[0]['pengajuan_id']?>/SK/RU/QTT/XI/<?= date('Y')?> <br>
        Perihal : Penawaran Harga
	</div>

	<div style="font-size: 14px; text-align: justify; margin-top:25px; margin-left:11px;">
        Kepada Yth :  <br>
        <strong><?= $pengajuan['user']['name'] ?></strong>
        <br>
        <?= $pengajuan['user']['address'] ?>
        <br>
        <br>
        Dengan Hormat,
        <br>
        <br>
        Bersama ini kami <strong>PT. Mustika Arga Kencana</strong>, PJK3 Riksa Uji Keselamatan & Kesehatan Kerja Peralatan Industri,
        yang mendapat penunjukan dari Kemenaker RI, sesuai informasi yang kami terima bahwa Perusahan Bapak
        memerlukan Jasa Riksa Uji K3 untuk peralatan.
        <br>
        Bersama ini kami mengajukan penawaran harga untuk hal tersebut dengan perincian harga sebagai berikut :
	</div>
	<table width=100%; style="table-layout: auto; width: 100%; border:none; border-collapse: collapse; margin-top: 10px; margin-left: 10px;">
		<thead>
			<tr>
				<th style="font-size: 12px; text-align:center; paddding:5px">No</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Nama Peralatan</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Qty</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Unit</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Harga Per Unit</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; $totalAwal = 0; ?>
			<?php foreach ($peralatan as $alat) : ?>
                <?php
                    $totalAwal += $alat['total_unit'];
                    $ppn = 0.11 * $totalAwal;
                    $pph = 0.02 * $totalAwal;
                    $totalAkhir = $totalAwal + $ppn + $pph;
                ?>
				<tr style="font-size: 12px;">
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $i++ ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $alat['peralatan']['nama_alat'] ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $alat['qty'] ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px">Unit</td>
					<td style="font-size: 12px; text-align:center; paddding:5px">Rp. <?= $alat['harga'] ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px">Rp. <?= $alat['total_unit'] ?></td>
				</tr>
			<?php endforeach; ?>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Total</th>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Rp. <?= $totalAwal; ?></th>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Ppn 11%</th>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Rp. <?= $ppn; ?></th>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Pph psl 23 - 2%</th>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Rp. <?= $pph; ?></th>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Total</th>
                    <th style="font-size: 14px; text-align:center; paddding:5px">Rp. <?= $totalAkhir; ?></th>
                </tr>
		</tbody>
	</table>
    <div style="font-size: 14px; text-align: justify; margin-top:10px; margin-left:11px;">
        Syarat dan Ketentuan Penawaran :
        <ul>
            <li>Pembayaran : T/T 100% Setelah Hasil Laporan Selesai</li>
            <li>PPH Pasal 23 (2%) : Dipotong oleh Pemberi kerja</li>
            <li>PPN 11% : Termasuk</li>
            <li>Masa Berlaku : 1 (Satu) Bulan</li>
        </ul>
        <br>
        Demikan Surat Penawaran harga ini kami sampaikan, atas perhatian dan kerjasamanya kami mengucapkan
        terima kasih.
	</div>

</body>

</html>
