<?php
include ("koneksi.php");

$id = $_GET['id_mobil'];
$sql = "DELETE FROM tb_mobil WHERE id_mobil='$id'";
$sql = "DELETE FROM tb_peminjaman WHERE id_mobil='$id'";

$query = mysqli_query($db, $sql);

if($query) {
    header('location:tampil.php');
} else {
    echo "gagal";
}
?>