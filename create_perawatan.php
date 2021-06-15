<!doctype html>
<html lang="en">
<head>
	<title>Tambah Perawatan</title>
</head>

<body>
	<h1>Tambah Perawatan</h1>
	<a href="perawatan.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id Member</label>
		<br>
		<input type="text" name="id_member">
		<br>
		<label>Menu Perawatan</label>
		<br>
		<input type="text" name="menu_perawatan">
        <br>
		<label>Menu Paket</label>
		<br>
		<input type="text" name="menu_paket">
		<br>
		<label>Durasi</label>
		<br>
		<input type="number" name="durasi">
        <br>
        <label>Tarif</label>
		<br>
		<input type="text" name="tarif">
        <br><br>
		<button type="submit" name="submit_simpan_perawatan">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>