<?php
include 'model.php';
//tbl perawatan
if (isset($_POST['submit_simpan_perawatan'])) {
 $id_member = $_POST['id_member'];
 $menu_perawatan = $_POST['menu_perawatan'];
 $menu_paket = $_POST['menu_paket'];
 $durasi = $_POST['durasi'];
 $tarif = $_POST['tarif'];
 $model = new Model();
 $model->insert_perawatan($id_member, $menu_perawatan, $menu_paket, $durasi, $tarif);
 header('location:perawatan.php');
}
if (isset($_POST['submit_edit_perawatan'])) {
$id_member = $_POST['id_member'];
$menu_perawatan = $_POST['menu_perawatan'];
$menu_paket = $_POST['menu_paket'];
$durasi = $_POST['durasi'];
$tarif = $_POST['tarif'];
$model = new Model();
$model->update_perawatan($id_member, $menu_perawatan, $menu_paket, $durasi, $tarif);
header('location:perawatan.php');
}
if (isset($_GET['perawatan_id'])) {
 $id_member = $_GET['perawatan_id'];
 $model = new Model();
 $model->delete_perawatan($id_member);
 header('location:perawatan.php');
}

//tbl pengunjung
if (isset($_POST['submit_simpan_pengunjung'])) {
 $id_member = $_POST['id_member'];
 $no_antrian = $_POST['no_antrian'];
 $nama = $_POST['nama'];
 $no_telfon = $_POST['no_telfon'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->insert_pengunjung($id_member, $no_antrian, $nama, $durasi, $tarif);
 header('location:pengunjung.php');
}
if (isset($_POST['submit_edit_pengunjung'])) {
$id_member = $_POST['id_member'];
$no_antrian = $_POST['no_antrian'];
$nama = $_POST['nama'];
$no_telfon = $_POST['no_telfon'];
$alamat = $_POST['alamat'];
$model = new Model();
$model->update_pengunjung($id_member, $no_antrian, $nama, $durasi, $tarif);
header('location:pengunjung.php');
}
if (isset($_GET['pengunjung_id'])) {
 $id_member = $_GET['pengunjung_id'];
 $model = new Model();
 $model->delete_pengunjung($id_member);
 header('location:pengunjung.php');
}

//tbl join
if (isset($_POST['submit_simpan_pengunjung'])) {
    $id_member = $_POST['id_member'];
    $no_antrian = $_POST['no_antrian'];
    $nama = $_POST['nama'];
    $no_telfon = $_POST['no_telfon'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->insert_pengunjung($id_member, $no_antrian, $nama, $durasi, $tarif);
    header('location:pengunjung.php');
}
if (isset($_POST['submit_edit_pengunjung'])) {
    $id_member = $_POST['id_member'];
    $no_antrian = $_POST['no_antrian'];
    $nama = $_POST['nama'];
    $no_telfon = $_POST['no_telfon'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->update_pengunjung($id_member, $no_antrian, $nama, $durasi, $tarif);
    header('location:pengunjung.php');
}
if (isset($_GET['pengunjung_id'])) {
    $id_member = $_GET['pengunjung_id'];
    $model = new Model();
    $model->delete_pengunjung($id_member);
    header('location:pengunjung.php');
}