<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses delete
$id    = $_GET['id_poin'];
$sql   = "DELETE FROM tab_poin WHERE id_poin = '$id' ";
$hapus = $koneksi->query($sql);

if ($hapus === TRUE) {
  echo "<script>alert('Hapus ID = ".$id." Berhasil') </script>";
  echo "<script>window.location.href = \"poin.php\" </script>";
} else {
  echo "Tidak Bisa Hapus !";
}
?>
