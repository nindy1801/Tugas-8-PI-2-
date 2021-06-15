<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();


// tabel perawatan
 }
 public function insert_perawatan($id_member, $menu_perawatan, $menu_paket, $durasi, $tarif)
{
	$sql = "INSERT INTO tbl_perawatan (id_member, menu_perawatan, menu_paket, durasi, tarif) 
	VALUES ('$id_member', '$menu_perawatan', '$menu_paket', '$durasi', '$tarif')";
	$this->conn->query($sql);
}
public function tampil_data_perawatan()
{
	 $sql = "SELECT * FROM tbl_perawatan";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_perawatan($id)
{
	 $sql = "SELECT * FROM tbl_perawatan WHERE id_member='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_perawatan($id_member, $menu_perawatan, $menu_paket, $durasi, $tarif)
{
	 $sql = "UPDATE tbl_perawatan SET id_member='$id_member', menu_perawatan='$menu_perawatan', menu_paket='$menu_paket' WHERE id_member='$id_member'";
	 $this->conn->query($sql);
}
public function delete_perawatan($perawatan_id)
{ 
	$sql = "DELETE FROM tbl_perawatan WHERE id_member='$perawatan_id'";
	$this->conn->query($sql);
}

// tabel pengunjung
 public function insert_pengunjung($id_member, $no_antrian, $nama, $no_telfon, $alamat)
{
  $sql = "INSERT INTO tbl_pengunjung (id_member, no_antrian, nama, no_telfon, alamat) 
  VALUES ('$id_member', '$no_antrian', '$nama', '$no_telfon', '$alamat')";
  $this->conn->query($sql);
}
public function tampil_data_pengunjung()
{
   $sql = "SELECT * FROM tbl_pengunjung";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}
public function edit_pengunjung($id)
{
   $sql = "SELECT * FROM tbl_pengunjung WHERE id_member='$id'";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) {
     $baris = $obj;
   }
   return $baris;
}
public function update_pengunjung($id_member, $no_antrian, $nama, $no_telfon, $alamat)
{
   $sql = "UPDATE tbl_pengunjung SET id_member='$id_member', no_antrian='$no_antrian', nama='$nama', no_telfon='$no_telfon' WHERE id_member='$id_member'";
   $this->conn->query($sql);
}
public function delete_pengunjung($pengunjung_id)
{ 
  $sql = "DELETE FROM tbl_pengunjung WHERE id_member='$pengunjung_id'";
  $this->conn->query($sql);
}

// tabel pengunjung
public function tampil_data()
{
   $sql = "SELECT tbl_pengunjung.*, alamat, no_telfon FROM tbl_pengunjung INNER JOIN tbl_perawatan ON tbl_pengunjung.id_member = tbl_perawatan.id_member";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}


}