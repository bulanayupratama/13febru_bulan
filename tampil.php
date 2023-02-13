<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMPIL</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <a href = "tambah.php"><input type="button" value="tambah"></a>
    <table border = "1">
        <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Keperluan</th>
        <th>Jaminan</th>
        <th>Plat Nomer</th>
        <th>merek</th>
        <th>jenis Mobil</th>
        <th>Tahun Mobil</th>
        <th>Tahun Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>

</tr>

<?php
include "koneksi.php";
$query = mysqli_query($db, "SELECT * FROM tb_mobil INNER JOIN tb_peminjaman ON tb_mobil.id_mobil= tb_peminjaman.id_mobil");

$no = 1;
foreach ($query as $row):

    ?>

    <tr>
        <td><?=$no++; ?></td>
        <td><?=$row['nama_peminjaman']; ?></td>
        <td><?=$row['alamat']; ?></td>
        <td><?=$row['umur']; ?></td>
        <td><?=$row['keperluan']; ?></td>
        <td><?=$row['jaminan']; ?></td>
        <td><?=$row['plat_mobil']; ?></td>
        <td><?=$row['merek']; ?></td>
        <td><?=$row['jenis_mobil']; ?></td>
        <td><?=$row['tahun_mobil']; ?></td>
        <td><?=$row['tanggal_pinjam']; ?><td>
        <td><?=$row['tanggal_kembali']; ?></td>
        <td>
            <a href="edit.php?id_mobil=<?=$row['id_mobil']; ?>">Edit</a>||
            <a href="hapus.php?id_mobil=<?=$row['id_mobil']; ?>">Hapus</a>
</td>
</tr>

<?php endforeach?>

</table>
</body>
</html>