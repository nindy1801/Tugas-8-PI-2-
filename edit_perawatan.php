<?php
$id_perawatan = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_perawatan($id_perawatan);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Perawatan</title>
</head>

<body>
    <h1>Edit Perawatan</h1>
    <a href="perawatan.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Id Member</label>
        <br>
        <input type="text" name="id_member" value="<?php echo $data->id_member ?>">
        <br>
        <label>Menu Perawatan</label>
        <br>
        <input type="text" name="menu_perawatan" value="<?php echo $data->menu_perawatan ?>">
        <br>
        <label>Menu Paket</label>
        <br>
        <input type="text" name="menu_paket" value="<?php echo $data->menu_paket ?>">
        <br>
        <label>Durasi</label>
        <br>
        <input type="text" name="durasi" value="<?php echo $data->durasi ?>">
        <br>
        <label>Tarif</label>
        <br>
        <input type="text" name="tarif" value="<?php echo $data->tarif ?>">
        <br><br>
        <button type="submit" name="submit_edit_perawatan">Submit</button>
    </form>
</body>

</html>