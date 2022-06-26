<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_krit  = $_POST['id_krit'];
$kriteria = $_POST['kriteria'];
$bobot    = $_POST['bobot'];

$ubah = mysql_query("UPDATE tab_kriteria SET kriteria ='".$kriteria."',bobot ='".$bobot."' WHERE id_kriteria='".$id_krit."' ");

echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
echo "<script>window.location.href = \"kriteria.php\" </script>";
?>
