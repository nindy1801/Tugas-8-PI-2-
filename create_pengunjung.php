<!doctype html>
<html lang="en">
<head>
	<title>Tambah Pengunjung</title>
</head>

<body>
	<h1>Tambah Pengunjung</h1>
	<a href="pengunjung.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Member</label>
		<br>
		<input type="text" name="id_member">
		<br>
		<label>No Antrian </label>
		<br>
		<input type="number" name="no_antrian">
        <br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama">
		<br>
		<label>No Telfon</label>
		<br>
		<input type="text" name="no_telfon">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
        <br><br>
		<button type="submit" name="submit_simpan_pengunjung">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>