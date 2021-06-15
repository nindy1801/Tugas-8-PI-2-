<?php
$id_member = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pengunjung($id_member);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Pengunjung</title>
</head>

<body>
    <h1>Edit Data Pengunjung</h1>
    <a href="pengunjung.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Member</label>
        <br>
        <input type="text" name="id_member" value="<?php echo $data->id_member ?>">
        <br>
        <label>No Antrian </label>
        <br>
        <input type="number" name="no_antrian" value="<?php echo $data->no_antrian ?>">
        <br>
        <label>Nama </label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>No Telfon </label>
        <br>
        <input type="text" name="no_telfon" value="<?php echo $data->no_telfon ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br><br>
        <button type="submit" name="submit_edit_pengunjung">Submit</button>
    </form>
</body>

</html>