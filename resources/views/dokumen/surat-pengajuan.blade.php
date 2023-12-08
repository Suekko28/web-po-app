<html>

<head>
	<title>Surat Pengajuan - <?= $peralatan[0]['pengajuan_id']?></title>
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
	<div style="text-align: justify; margin-top:50px; margin-left:11px;">
        Kepada Yth :  <br>
        PT. Mustika Arga Kencana <br> <br>
        Bersama ini kami mengajukan pemeriksaan pada alat berikut ini :
	</div>
	<table width=100%; style="table-layout: auto; width: 100%; border-collapse: collapse; margin-top: 10px; margin-left: 10px;">
		<thead>
			<tr>
				<th style="font-size: 12px; text-align:center; paddding:5px">No</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Nama Peralatan</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Qty</th>
				<th style="font-size: 12px; text-align:center; paddding:5px">Unit</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($peralatan as $alat) : ?>
				<tr style="font-size: 12px;">
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $i++ ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $alat['peralatan']['nama_alat'] ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px"><?= $alat['qty'] ?></td>
					<td style="font-size: 12px; text-align:center; paddding:5px">Unit</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
    <div style="text-align: justify; margin-left:11px;">
        Demikian Surat Pengajuan ini kami sampaikan, ataas perhatian dan kerjasamanya kami mengucapkan
        terimakasih.
	</div>

</body>

</html>
