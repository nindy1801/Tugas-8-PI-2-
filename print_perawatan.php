<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
		text-align: center;
		}
		table, 
		td, 
		th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		th, 
		td {
		padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Perawatan</h1>
	<table class="table table-striped" border="1">
		<thead>
			<tr bgcolor="B0C4DE">
                    <th>No.</th>
                    <th>ID Member</th>
                    <th>Menu Perawatan</th>
                    <th>Menu Paket</th>
                    <th>Durasi</th>
                    <th>Tarif</th>
                    <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_perawatan();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_member ?></td>
                            <td><?= $data->menu_perawatan ?></td> 
                            <td><?= $data->menu_paket ?></td>
                            <td><?= $data->durasi ?></td>
                            <td><?= $data->tarif ?></td>
                            <td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel perawatan.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>