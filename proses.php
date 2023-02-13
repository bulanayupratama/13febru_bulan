<?php
include ("koneksi.php");
if (isset($_POST['simpan'])){
    $nama_peminjaman = $_POST['nama_peminjaman'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $keperluan = $_POST['keperluan'];
    $jaminan =  $_POST['jaminan'];
    $plat_mobil = $_POST['plat_mobil'];
    $merek = $_POST['merek'];
    $jenis_mobil = $_POST['jenis_mobil'];
    $tahun_mobil = $_POST['tahun_mobil'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

    $sql = "INSERT INTO tb_mobil (plat_mobil, merek, jenis_mobil, tahun_mobil, tanggal_pinjam, tanggal_kembali) VALUES ('$plat_mobil', '$merek', '$jenis_mobil', '$tahun_mobil', '$tanggal_pinjam', '$tanggal_kembali')";
    $query = mysqli_query($db, $sql);

    $sql = "SELECT max(id_mobil) as id_mobil FROM tb_mobil LIMIT 1";
    $query = mysqli_query($db,$sql);

    $data = mysqli_fetch_array ($query);
    $id_mobil = $data['id_mobil'];

    $sql = "INSERT INTO tb_peminjaman(id_mobil, nama_peminjaman, alamat, umur, keperluan, jaminan) VALUES ('$id_mobil', '$nama_peminjaman', '$alamat', '$umur', '$keperluan', '$jaminan')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>