<html>
    <head>
        <title>Edit</title>
</head>
<body>
    <?php
    include ("koneksi.php");
    if(isset($_GET['id_mobil'])){
        header("Location: tampil.php");
    }
    $id = $_GET['id_mobil'];
    $sql = "SELECT * FROM tb_mobil WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);
   $tb_mobil = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1) {
        die ("Data tidak ditemukan!!");
    }
    ?>


</body>
</html>

<h1>Edit</h1>
<form action="proses.php" method="POST">
    <input type="hidden" name="id_mobil" value="<?php echo $tb_mobil['id_mobil'] ?>" />
    <br>
    <br>
    <label for="nama_peminjaman">Nama Peminjaman : </label>
    <input type="text" name="nama_peminjaman" />
    <br>
    <label for="alamat">Alamat : </label>
    <input type="text" name="alamat" />
    <br>
    <br>
    <label for="umur">Umur : </label>
    <input type="text" name="umur" />
    <br>
    <br>
    <label for="keperluan">Keperluan : </label>
    <input type="text" name="keperluan" />
    <br>
    <br>
    <label for="jaminan">Jaminan : </label>
    <input type="text" name="jaminan" />
    <br>
    <br><br>
    <label for="plat_mobil">Plat Mobil: </label>
    <input type="text" name="plat_mobil" />
    <br>
    <br>
    <label for="merek">Merek : </label>
    <input type="text" name="merek" />
    <br>
    <br>
    <label for="jenis_mobil">Jenis Mobil : </label>
    <input type="text" name="jenis_mobil" />
    <br>
    <br>
    <label for="tahun_mobil">Tahun Mobil : </label>
    <input type="text" name="tahun_mobil" />
    <br>
    <br>
    <label for="tanggal_pinjam">Tanggal_pinjam : </label>
    <input type="text" name="tanggal_pinjam" />
    <br>
    <br>
    <label for="tanggal_kembali">Tanggal Kembali : </label>
    <input type="text" name="tanggal_kembali" />
    <br>
   <input type="submit" id="edit" name="edit" />

</form>
<?php

?>
</table>
</body>
</html>
