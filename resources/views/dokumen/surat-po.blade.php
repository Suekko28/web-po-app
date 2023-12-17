<html>

<head>
	<title>Surat PO - <?= $peralatan[0]['pengajuan_id']?></title>
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
		<h1 style="margin-top: 20px;">Purchase Order</h1>
	</div>
	<hr>
	<div style="font-size: 14px; text-align: justify; margin-top:10px; margin-left:11px;">
        <strong>PT. Mustika Arga Kencana</strong> <br>
        Puri nirwana 2 blok A no 16, Harapan <br>
        Jaya, Kec. Cibinong, Kabupaten Bogor, <br>
        Jawa Barat 16914 <br>
        +6221-8371-8138 <div style="float: right;">Purchase Order NO : <?= $peralatan[0]['pengajuan_id']?></div> <br>
	</div>
    <hr>
	<div style="font-size: 14px; text-align: justify; margin-left:11px;">
        <div style="max-width:40%;">
            <strong>Informasi Pelanggan</strong> <br>
            <?= $pengajuan['user']['name'] ?>
            <br>
            <?= $pengajuan['user']['address'] ?>
            <br>
            <br>
        </div>
        Bersama ini kami mengajukan Purchase Order pada alat berikut ini :
	</div>
	<table width=100%; style="table-layout: auto; width: 100%; border:none; border-collapse: collapse; margin-left: 10px;">
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
		</tbody>
	</table>
    <div style="font-size: 14px; text-align: justify; margin-top:10px; margin-left:11px;">
        <br>
        Demikan Surat PO ini kami sampaikan, atas perhatian dan kerjasamanya kami mengucapkan
        terima kasih.
	</div>

</body>

</html>
